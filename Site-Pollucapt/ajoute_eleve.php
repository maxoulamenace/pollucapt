<?php
	//si les deux parametres ont bien une valeur passée en parametre
	if( isset($_GET["prenom"]) && isset($_GET["nom"]) && isset($_GET["age"])) {
		//on recupere les valeurs passes en parametre dans la requete HTTP
		//et on les mets dans des variables correspondantes
		$prenom =$_GET["prenom"];
		$age =$_GET["age"];
		$nom =$_GET["nom"];
		//on affiche les valeurs obtenues
		echo 'Ajout de l eve : '.$nom." ".$prenom." ".$age."  dans la base";

		//on definit les variables de connexion à la BDD
		$user='pollucapt';
		$password='MaisTG!3'; 	
		$basededonnees='pollucapt_eleves';
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
		if ($mysqli->query('INSERT INTO Eleves (Nom, Prenom, age) values("'.$nom.'", "'.$prenom.'", "'.$age.'")') === TRUE) {
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
