//----------fonction de connexion a un reseau wifi en passant en parametre le SSID et le mot de passe --------------//
void connexionWifi(const char* ssid,const char* password) {
  Serial.println("");
  Serial.println("****************************************************");
  Serial.println("*************  Connexion WIFI **********************");
  Serial.println("****************************************************");
  Serial.println("");
  Serial.print("Connexion au reseau :  ");
  Serial.println(ssid);

  //Connexion au reseau avec le nom et le pswd passés en parametres
  WiFi.begin(ssid, password);

 

  //on attend tant que pas connecte, et on affiche des "..."
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }
  
  //Quand on est connecte, on affiche un message OK et l'adresse IP.
  Serial.println("");
  Serial.print("Connecte au reseau WiFi: ");
  Serial.println(ssid);
  Serial.println("Addresse IP : ");
  Serial.println(WiFi.localIP());
}
