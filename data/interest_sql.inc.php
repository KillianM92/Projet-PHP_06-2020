<?php require("data/data.inc.php"); ?>

<?php

// Requêtes SQL pour l'id_interest 1

$result1 = $pdo->query("SELECT description FROM interest WHERE id_interest = 1 AND deletion_flag IS NULL");
$description1 = $result1->fetch(PDO::FETCH_OBJ); 

// Requêtes SQL pour l'id_interest 2

$result2 = $pdo->query("SELECT description FROM interest WHERE id_interest = 2 AND deletion_flag IS NULL");
$description2 = $result2->fetch(PDO::FETCH_OBJ); 

?>