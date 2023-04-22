// ------------------------------ Fonction d'envoi des donnees lues sur un serveur ------------------------------------------------//
void envoiDonneesPHP(String url){  
  Serial.println("");
  Serial.println("===========================================DEBUT ENVOI DES DONNEES ======================================================");
  Serial.println("");
  HTTPClient Client_http_ESP;                                             //creation de l'instance http
  uint16_t port = 80;                                                     //numero de port pour l'envoi sur le serveur (80 par défaut)
  Serial.print("connexion au serveur : ");                                //message de debuggage pour verifier
  Serial.println(host_PHP);                                               //affiche l'adresse qu'on essaie d'atteindre
  Serial.print("fichier php et parametre : ");                            //et la fin de l'url envoyee au serveur http  
  Serial.println(url);                                        
  WiFiClient clientWifi;
  
  Client_http_ESP.begin(clientWifi,host_PHP,port,url);                                   //execution requete avec l'adresse du serveur,le port et la fin de l'url
  
  int httpCode_ReponseServeur = Client_http_ESP.GET();
  Serial.println(httpCode_ReponseServeur);                                    //recuperation du code retour sous la forme d'un entier httpcode
  if (httpCode_ReponseServeur){                                               //si la requette a bien aboutie -> httpcode<>0
    if (httpCode_ReponseServeur == 200){                                      //et que le code retour httpcode est 200
      String reponseRecue = Client_http_ESP.getString();                      //on recupere et affichele code renvoyé par le serveur 
      Serial.println(reponseRecue);                                           //on affiche la réponse                                  
    }                               
  }
                         
  Client_http_ESP.end();                                                 //fermeture de la connexion
  Serial.println("");
  Serial.println("===========================================FIN ENVOI DES DONNEES ======================================================");
  Serial.println(""); 
}
