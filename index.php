<?php	
 $db_server = 'localhost'; // Adresse du serveur MySQL
	$db_name = 'moteur_de_recherche';            // Nom de la base de données
	$db_user_login = 'root';  // Nom de l'utilisateur
	$db_user_pass = '';       // Mot de passe de l'utilisateur

	// Ouvre une connexion au serveur MySQL
	$conn = mysqli_connect($db_server,$db_user_login, $db_user_pass, $db_name) or die (mysqli_error($con));
	$str = $_POST["search"];
//$con=mysqli_connect("localhost", "root", "moteur_de_recherche"," ") or die (mysqli_error($con));
$resultat=mysqli_query($conn,"SELECT * FROM `search` WHERE Name = '$str' OR Description = '$str' OR id= '$str'") ;
if($red =mysqli_fetch_row($resultat))
	{
		?>
		<br><br><br>
		<table border=2 align=center >
			<tr>
   <th>id</th>
				<th>Name</th>
				<th>Description</th>
			</tr>
			<tr>
   <td><?php echo $red[0]; ?></td>
				<td><?php echo $red[1]; ?></td>
				<td><?php echo $red[2]?></td>
			</tr>

		</table>
<?php 
	}
			else{
			echo " <h1> N existe pas </h1>";
		}
	
/*echo" <table border=2 align=center >";
echo"<tr>";
echo"<th>id</th> <th>Name</th> <th>Description</th>";
echo"</tr>";
while($red=mysqli_fetch_row($resultat))
{
	echo"<tr>";
	echo"<td>".$red[0]."</td>";
		echo"<td>".$red[1]."</td>";
	echo"	<td>".$red[2]."</td>";
	echo"</tr>";
}*/

/*on se connecte à notre base
$con = new PDO("mysql:host=localhost;dbname=moteur_de_recherche",'root','');
// on teste si notre variable est déclarée
if (isset($_POST["submit"]))
 {
			// lancement de la requête
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `search` WHERE Name = '$str' OR Description = '$str' OR id= '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();
// on affiche le résultat
	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table border=2 align=center >
			<tr>
   <th>id</th>
				<th>Name</th>
				<th>Description</th>
			</tr>
			<tr>
   <td><?php echo $row->id; ?></td>
				<td><?php echo $row->Name; ?></td>
				<td><?php echo $row->Description;?></td>
			</tr>

		</table>
<?php 
	}
			else{
			echo " Does not exist";
		}
	}*
	
	if (isset($_POST["supprimer"]))
 {
			// lancement de la requête
			$str = $_POST["search"];
	$sth = $con->prepare("DELETE FROM `search` WHERE Name = '	$str' OR Description = '	$str' OR id= '	$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth->execute();
  echo "Success";
	}*/
?>