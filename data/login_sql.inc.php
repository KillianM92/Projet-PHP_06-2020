<?php require("data/data.inc.php"); ?>

<?php

// Requêtes SQL pour l'id_login 1

$result1 = $pdo->query("SELECT username FROM login WHERE id_login= 1");
$username1 = $result1->fetch(PDO::FETCH_OBJ); 

$result2 = $pdo->query("SELECT password FROM login WHERE id_login= 1");
$password1 = $result2->fetch(PDO::FETCH_OBJ); 

?>