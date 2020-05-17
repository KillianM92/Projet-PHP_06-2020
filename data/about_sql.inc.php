<?php require("data/data.inc.php"); ?>

<?php

// Requêtes SQL pour l'id_people 1

$result1 = $pdo->query("SELECT prenom FROM about WHERE id_people = 1");
$prenom1 = $result1->fetch(PDO::FETCH_OBJ); 

$result2 = $pdo->query("SELECT nom FROM about WHERE id_people = 1");
$nom1 = $result2->fetch(PDO::FETCH_OBJ); 

$result3 = $pdo->query("SELECT adresse FROM about WHERE id_people = 1");
$adresse1 = $result3->fetch(PDO::FETCH_OBJ); 

$result4 = $pdo->query("SELECT ville FROM about WHERE id_people = 1");
$ville1 = $result4->fetch(PDO::FETCH_OBJ); 

$result5 = $pdo->query("SELECT province FROM about WHERE id_people = 1");
$province1 = $result5->fetch(PDO::FETCH_OBJ); 

$result6 = $pdo->query("SELECT codepostal FROM about WHERE id_people = 1");
$codepostal1 = $result6->fetch(PDO::FETCH_OBJ); 

$result7 = $pdo->query("SELECT numero_tel FROM about WHERE id_people = 1");
$numero_tel1 = $result7->fetch(PDO::FETCH_OBJ); 

$result8 = $pdo->query("SELECT email FROM about WHERE id_people = 1");
$email1 = $result8->fetch(PDO::FETCH_OBJ); 

$result9 = $pdo->query("SELECT description FROM about WHERE id_people = 1");
$description1 = $result9->fetch(PDO::FETCH_OBJ);

?>