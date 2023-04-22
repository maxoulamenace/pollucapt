<?php

                            //si les deux parametres ont bien une valeur passée en parametre
                            if( isset($_GET["coord_x"]) && isset($_GET["coord_y"])) {
                                //on recupere les valeurs passes en parametre dans la requete HTTP
                                //et on les mets dans des variables correspondantes
                                $coord_x =$_GET["coord_x"];
                                $coord_y =$_GET["coord_y"];
                                //on affiche les valeurs obtenues
                        
                                //on definit les variables de connexion à la BDD
                                $user='pollucapt';
                                $password='MaisTG!3'; 	
                                $basededonnees='pollucapt_bd';
                                //on cree une novelle connexion à la BDD
                                //modifiez le XXXXXXX pour faire correspondre l'adresse
                                //du serveur MySQL à votre configuration de TP
                                $mysqli = new mysqli('mysql-pollucapt.alwaysdata.net', $user, $password, $basededonnees);
                        
                                //si la connexion ne fonctionne pas,
                                if ($mysqli->connect_error) {
                                    //on affiche un message d'erreur
                                    die('Erreur de connexion (' . $mysqli->connect_errno . ') '. $mysqli->connect_error);
                                }
                                else { 
                                    //si la connexion est ok on affiche les infos
                                    echo'Bien connecté à la base ' . $mysqli->host_info . "\n";
                                }
                        
                                //on execute la requete choisie grace à "query"
                                if ($mysqli->query('INSERT INTO coordonnees (coord_x,coord_y,niveau) values("'.$coord_x.'", "'.$coord_y.'","2")') === TRUE) {
                                    //si requete OK on affiche : 
                                    printf("insert  ok.\n");
                                }
                                else {
                                    //si requete pas ok on affiche : 
                                    printf("problème requête");
                                }
                                //on ferme la connexion à la BDD
                                $mysqli->close();
                            }	
                            //si les deux parametres ne sont pas définis, message erreur
                            else {
                                echo 'toutes les valeurs n ont pas ete passees en parametre';
                            }
                        
?>