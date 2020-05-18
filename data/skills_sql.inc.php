<?php require("data/data.inc.php"); ?>

<?php

// Requêtes SQL pour l'id_skill 1

$result1 = $pdo->query("SELECT description FROM skills WHERE id_skill = 1");
$skill1 = $result1->fetch(PDO::FETCH_OBJ); 

// Requêtes SQL pour l'id_skill 2

$result2 = $pdo->query("SELECT description FROM skills WHERE id_skill = 2");
$skill2 = $result2->fetch(PDO::FETCH_OBJ); 

// Requêtes SQL pour l'id_skill 3

$result3 = $pdo->query("SELECT description FROM skills WHERE id_skill = 3");
$skill3 = $result3->fetch(PDO::FETCH_OBJ); 

// Requêtes SQL pour l'id_skill 4

$result4 = $pdo->query("SELECT description FROM skills WHERE id_skill = 4");
$skill4 = $result4->fetch(PDO::FETCH_OBJ); 

// Requêtes SQL pour l'id_skill 5

$result5 = $pdo->query("SELECT description FROM skills WHERE id_skill = 5");
$skill5 = $result5->fetch(PDO::FETCH_OBJ); 

// Requêtes SQL pour l'id_skill 6

$result6 = $pdo->query("SELECT description FROM skills WHERE id_skill = 6");
$skill6 = $result6->fetch(PDO::FETCH_OBJ); 

?>