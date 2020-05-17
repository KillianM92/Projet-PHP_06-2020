<?php require("data/data.inc.php"); ?>

<?php

// Requêtes SQL pour l'id_diplome 1

$result1 = $pdo->query("SELECT description FROM diplomes WHERE id_diplome = 1");
$description1 = $result1->fetch(PDO::FETCH_OBJ); 

// Requêtes SQL pour l'id_diplome 2

$result2 = $pdo->query("SELECT description FROM diplomes WHERE id_diplome = 2");
$description2 = $result2->fetch(PDO::FETCH_OBJ); 

// Requêtes SQL pour l'id_diplome 3

$result3 = $pdo->query("SELECT description FROM diplomes WHERE id_diplome = 3");
$description3 = $result3->fetch(PDO::FETCH_OBJ); 

// Requêtes SQL pour l'id_diplome 4

$result4 = $pdo->query("SELECT description FROM diplomes WHERE id_diplome = 4");
$description4 = $result4->fetch(PDO::FETCH_OBJ); 

// Requêtes SQL pour l'id_diplome 5

$result5 = $pdo->query("SELECT description FROM diplomes WHERE id_diplome = 5");
$description5 = $result5->fetch(PDO::FETCH_OBJ); 

// Requêtes SQL pour l'id_diplome 6

$result6 = $pdo->query("SELECT description FROM diplomes WHERE id_diplome = 6");
$description6 = $result6->fetch(PDO::FETCH_OBJ); 

?>