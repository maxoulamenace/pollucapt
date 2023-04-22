
/********************************************Import des bibliotèque********************************************/
  #include <MQ131.h>
  #include <DNSServer.h> 
  #include <ESP8266httpUpdate.h>
  #include <ESP8266HTTPClient.h>  
  #include <TinyGPS++.h>
  #include <SoftwareSerial.h>
  #include <ESP8266WiFi.h>
  
/********************************************Définition des variable pour le gps********************************************/
  
  TinyGPSPlus gps;  
  SoftwareSerial ss(4, 5);
  float latitude , longitude;
  String lat_str , lng_str;
/********************************************Définition des variable pour le insert dans la base de données********************************************/

  String host_PHP = "pollucapt.alwaysdata.net"; //lien du site
  String lien_fichier_PHP = "/insertarduino.php"; //lien vers le fichier php dans le site
  
/********************************************Définition des variable pour le wifi********************************************/

  const char* ssid = "HOME"; //Nom du wifi
  const char* password = "UNPET1TM0TDEPASSE!"; //mot de passe du wifi

/********************************************Définition des variable pour la consentration en o3********************************************/

float consotrois;
String cons;
 
  void setup() {  
    Serial.begin(9600);
    ss.begin(9600); //initialisation du gps
    connexionWifi(ssid,password); //appel de la fonction pour se connecter au wifi
      MQ131.begin(2,A0, LOW_CONCENTRATION, 1000000);  
    MQ131.calibrate();
  }
  
  
  void loop() {

    while (ss.available() > 0) //on entre dans la boucle que si le gps reçois des données
    if (gps.encode(ss.read())) //lecture des données du gps
    {
      if (gps.location.isValid()) //vérification de la posistion du gps
      {
        consotrois = Serial.print(MQ131.getO3(UG_M3)); //obtention de la concentreation en o3
        cons = String(consotrois);
        latitude = gps.location.lat(); //Mise dans la variable latitude le chiffre corespondant
        lat_str = String(latitude , 50); //Transphormation de la valeur de la latitude dans une variable chaine de caractère avec 50 caractères
        longitude = gps.location.lng(); //Mise dans la variable longitude le chiffre corespondant
        lng_str = String(longitude , 50); //Transphormation de la valeur de la longitude dans une variable chaine de caractère avec 50 caractères
        Serial.println("ok reception gps \n");
        lien_fichier_PHP="/insertarduino.php?coord_x="+lng_str+"&coord_y="+lat_str+"&niveau="+cons; //Construction du lien pour envoyer les données avec les variable défini au dessu
        envoiDonneesPHP(lien_fichier_PHP); //appel de la foncction pemmetant d'envoyer les coordonnées sur la base de donnée
        delay(5000); //pause de 5sec pour ne pas surcharger la base de données

      }
    }
  }

    
