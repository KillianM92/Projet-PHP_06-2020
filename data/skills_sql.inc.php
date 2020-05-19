<?php require("data/data.inc.php"); ?>

<?php

// Requêtes SQL pour l'id_skill 1

$result1 = $pdo->query("SELECT description FROM skills WHERE id_skill = 1 AND deletion_flag IS NULL");
$skill1 = $result1->fetch(PDO::FETCH_OBJ); 

// Requêtes SQL pour l'id_skill 2

$result2 = $pdo->query("SELECT description FROM skills WHERE id_skill = 2 AND deletion_flag IS NULL");
$skill2 = $result2->fetch(PDO::FETCH_OBJ); 

// Requêtes SQL pour l'id_skill 3

$result3 = $pdo->query("SELECT description FROM skills WHERE id_skill = 3 AND deletion_flag IS NULL");
$skill3 = $result3->fetch(PDO::FETCH_OBJ); 

// Requêtes SQL pour l'id_skill 4

$result4 = $pdo->query("SELECT description FROM skills WHERE id_skill = 4 AND deletion_flag IS NULL");
$skill4 = $result4->fetch(PDO::FETCH_OBJ); 

// Requêtes SQL pour l'id_skill 5

$result5 = $pdo->query("SELECT description FROM skills WHERE id_skill = 10 AND deletion_flag IS NULL");
$skill5 = $result5->fetch(PDO::FETCH_OBJ); 

// Requêtes SQL pour l'id_skill 6

$result6 = $pdo->query("SELECT description FROM skills WHERE id_skill = 6 AND deletion_flag IS NULL");
$skill6 = $result6->fetch(PDO::FETCH_OBJ); 

?>