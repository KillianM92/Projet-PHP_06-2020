<?php require("data/data.inc.php"); ?>

<?php

// Requêtes SQL pour l'id_interest 1

$result1 = $pdo->query("SELECT description FROM interest WHERE id_interest = 1");
$description1 = $result1->fetch(PDO::FETCH_OBJ); 

$result2 = $pdo->query("SELECT description FROM interest WHERE id_interest = 2");
$description2 = $result2->fetch(PDO::FETCH_OBJ); 

?>