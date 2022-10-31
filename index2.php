<?php
$db_server = 'localhost'; // Adresse du serveur MySQL
	$db_name = 'moteur_de_recherche';            // Nom de la base de données
	$db_user_login = 'root';  // Nom de l'utilisateur
	$db_user_pass = '';       // Mot de passe de l'utilisateur

	// Ouvre une connexion au serveur MySQL
	$conn = mysqli_connect($db_server,$db_user_login, $db_user_pass, $db_name) or die (mysqli_error($con)); 
			$str = $_POST["id"];
			$sth = mysqli_query($conn,"DELETE FROM `search` WHERE Name = '	$str' OR Description = '	$str' OR id= '	$str'");
		
			if($sth == true){
			echo "  <h1> ok ca a bien supprimer  !</h1> ";
		}
	
/*	$str = $_POST["search"];
 $sth = mysqli_query($conn,"DELETE FROM `search` WHERE Name = '	$str' OR Description = '	$str' OR id= '	$str'");
echo "Success";*/
?>