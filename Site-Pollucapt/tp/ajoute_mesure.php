<?php
	//si les deux parametres ont bien une valeur passée en parametre
	if( isset($_GET["ValeurMesures"]) && isset($_GET["Moment"])) {
		//on recupere les valeurs passes en parametre dans la requete HTTP
		//et on les mets dans des variables correspondantes
		$ValeurMesures =$_GET["ValeurMesures"];
		$Moment =$_GET["Moment"];
		//on affiche les valeurs obtenues
		echo 'Ajout des meusures: '.$ValeurMesures." ".$Moment."  dans la base";

		//on definit les variables de connexion à la BDD
		$user='tpsindtuk';
		$password='MaisTG!3'; 	
		$basededonnees='tpsindtuk_tp';
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
		if ($mysqli->query('INSERT INTO Mesures (ValeurMeusures, Moment) values("'.$ValeurMesures.'", "'.$Moment.'")') === TRUE) {
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
