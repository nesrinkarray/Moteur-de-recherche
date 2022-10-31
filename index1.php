<?php
$db_server = 'localhost'; // Adresse du serveur MySQL
$db_name = 'moteur_de_recherche';            // Nom de la base de données
$db_user_login = 'root';  // Nom de l'utilisateur
$db_user_pass = '';       // Mot de passe de l'utilisateur

// Ouvre une connexion au serveur MySQL
$conn = mysqli_connect($db_server,$db_user_login, $db_user_pass, $db_name) or die (mysqli_error($con));

$res=mysqli_query($conn,"select * from search where id ='".$id = $_POST['id']." '") or die (mysqli_error($con));
if(mysqli_num_rows ($res)==1)
  echo " <h1>deja enregistre !</h1>";
  
  else {
     
$resultat=mysqli_query($conn,"INSERT INTO search (id,Name,Description) VALUES ('".$id = $_POST['id']." ','".$Name = $_POST['Name']."','".$Description=$_POST["Description"]."')");
if ($resultat)
  echo "<h1> bien ajouter </h1>";
  }

  /*$con=mysql_connect("localhost", "root", ""); 
mysql_select_db("moteur_de_recherche");
if(!$con)
{
  echo "Failed to Connect to MySql".mysqli_connect_error();
}
else
{
  echo"success";
} */
/*$query="INSERT INTO search (id,Name,Description) VALUES ('".$id = $_POST['id']." ','".$Name = $_POST['Name']."','".$Description=$_POST["Description"]."')"; 
$resultat=mysqli_query($conn,$query);*/


/*
$con = new PDO("mysql:host=localhost;dbname=moteur_de_recherche",'root','');
 // récupérer les valeurs 
 if ( isset( $_GET['submit'] ) ) {s
 $Id = $_POST['Id'];
 $Name = $_POST['Name'];
 $Description=$_POST["Description"];
 // Requête mysql pour insérer des données 
$sth = $con->prepare("INSERT INTO `search` (Id,Name,Description) VALUES ('$Id','$Name','$Description')");
$sth->setFetchMode(PDO:: FETCH_OBJ);

$sth->execute();
echo "Success";*/
 
?>