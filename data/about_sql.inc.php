<?php require("data/data.inc.php"); ?>

<?php

// Requêtes SQL pour l'id_people 1

$result1 = $pdo->query("SELECT prenom FROM about WHERE id_people = 1 AND deletion_flag IS NULL");
$prenom1 = $result1->fetch(PDO::FETCH_OBJ); 

$result2 = $pdo->query("SELECT nom FROM about WHERE id_people = 1 AND deletion_flag IS NULL");
$nom1 = $result2->fetch(PDO::FETCH_OBJ); 

$result3 = $pdo->query("SELECT adresse FROM about WHERE id_people = 1 AND deletion_flag IS NULL");
$adresse1 = $result3->fetch(PDO::FETCH_OBJ); 

$result4 = $pdo->query("SELECT ville FROM about WHERE id_people = 1 AND deletion_flag IS NULL");
$ville1 = $result4->fetch(PDO::FETCH_OBJ); 

$result5 = $pdo->query("SELECT province FROM about WHERE id_people = 1 AND deletion_flag IS NULL");
$province1 = $result5->fetch(PDO::FETCH_OBJ); 

$result6 = $pdo->query("SELECT codepostal FROM about WHERE id_people = 1 AND deletion_flag IS NULL");
$codepostal1 = $result6->fetch(PDO::FETCH_OBJ); 

$result7 = $pdo->query("SELECT numero_tel FROM about WHERE id_people = 1 AND deletion_flag IS NULL");
$numero_tel1 = $result7->fetch(PDO::FETCH_OBJ); 

$result8 = $pdo->query("SELECT email FROM about WHERE id_people = 1 AND deletion_flag IS NULL");
$email1 = $result8->fetch(PDO::FETCH_OBJ); 

$result9 = $pdo->query("SELECT description FROM about WHERE id_people = 1 AND deletion_flag IS NULL");
$description1 = $result9->fetch(PDO::FETCH_OBJ);

?>