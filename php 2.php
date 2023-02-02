<?php
// Connexion à MySQL
$connection=mysqli_connect("localhost", "root", "", "i3");

if (!$connection){ // Contrôler la connexion
    $MessageConnexion = die ("connection impossible");
}
else {
   $id=$_POST['id'];
   $prenom=$_POST['prenom'];
   $age=$_POST['age'];
 
   // Requête d'insertion
   $AjouterDisque="INSERT INTO tab1  VALUES ('$id', '$prenom', '$age')";

   // Exécution de la reqête
   mysqli_query($connection, $AjouterDisque) or die('Erreur SQL !'.$AjouterDisque.'<br>'.mysqli_error($connection));
}

?>