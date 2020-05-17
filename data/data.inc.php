<?php 

// Connexion à la base de données
// On se connecte à sitecv et on affiche les erreurs possibles car on est en train de développer
$pdo = new PDO("mysql:host=localhost;dbname=sitecv", "root", "", array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

?>