<?php
	//la fonction ISSET permet savoir si la variable a bien été définie en recevant une valeur -> "is set"
	if(isset($_GET["prenom"])) {
		//si oui
		$prenom =$_GET["prenom"];
		$nom =$_GET["nom"];
		echo 'Bienvenu, '.$prenom." ".$nom." Je suis ravi de te voir sur mon serveur";
	}
	else{
		//si non
		echo 'Bienvenu inconnu. Je ne connais pas ton prénom. Mais sois le bienvenu quand même.';
	}
?>
