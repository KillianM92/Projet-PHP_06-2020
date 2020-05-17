<?php require("data/data.inc.php"); ?>

<?php 

// Requêtes SQL pour l'id_exp 1

$result = $pdo->query("SELECT metier FROM experience WHERE id_exp = 1");
$metier1 = $result->fetch(PDO::FETCH_OBJ); 

$result1 = $pdo->query("SELECT entreprise FROM experience WHERE id_exp = 1");
$entreprise1 = $result1->fetch(PDO::FETCH_OBJ); 

$result2 = $pdo->query("SELECT description FROM experience WHERE id_exp = 1");
$description1 = $result2->fetch(PDO::FETCH_OBJ);

$result3 = $pdo->query("SELECT date FROM experience WHERE id_exp = 1");
$date1 = $result3->fetch(PDO::FETCH_OBJ);


// Requêtes SQL pour l'id_exp 2

$result4 = $pdo->query("SELECT metier FROM experience WHERE id_exp = 2");
$metier2 = $result4->fetch(PDO::FETCH_OBJ); 

$result5 = $pdo->query("SELECT entreprise FROM experience WHERE id_exp = 2");
$entreprise2 = $result5->fetch(PDO::FETCH_OBJ); 

$result6 = $pdo->query("SELECT description FROM experience WHERE id_exp = 2");
$description2 = $result6->fetch(PDO::FETCH_OBJ);

$result7 = $pdo->query("SELECT date FROM experience WHERE id_exp = 2");
$date2 = $result7->fetch(PDO::FETCH_OBJ);


// Requêtes SQL pour l'id_exp 3

$result8 = $pdo->query("SELECT metier FROM experience WHERE id_exp = 3");
$metier3 = $result8->fetch(PDO::FETCH_OBJ); 

$result9 = $pdo->query("SELECT entreprise FROM experience WHERE id_exp = 3");
$entreprise3 = $result9->fetch(PDO::FETCH_OBJ); 

$result10 = $pdo->query("SELECT description FROM experience WHERE id_exp = 3");
$description3 = $result10->fetch(PDO::FETCH_OBJ);

$result11 = $pdo->query("SELECT date FROM experience WHERE id_exp = 3");
$date3 = $result11->fetch(PDO::FETCH_OBJ);


// Requêtes SQL pour l'id_exp 4

$result12 = $pdo->query("SELECT metier FROM experience WHERE id_exp = 4");
$metier4 = $result12->fetch(PDO::FETCH_OBJ); 

$result13 = $pdo->query("SELECT entreprise FROM experience WHERE id_exp = 4");
$entreprise4 = $result13->fetch(PDO::FETCH_OBJ); 

$result14 = $pdo->query("SELECT description FROM experience WHERE id_exp = 4");
$description4 = $result14->fetch(PDO::FETCH_OBJ);

$result15 = $pdo->query("SELECT date FROM experience WHERE id_exp = 4");
$date4 = $result15->fetch(PDO::FETCH_OBJ);


// Requêtes SQL pour l'id_exp 5

$result16 = $pdo->query("SELECT metier FROM experience WHERE id_exp = 5");
$metier5 = $result16->fetch(PDO::FETCH_OBJ); 

$result17 = $pdo->query("SELECT entreprise FROM experience WHERE id_exp = 5");
$entreprise5 = $result17->fetch(PDO::FETCH_OBJ); 

$result18 = $pdo->query("SELECT description FROM experience WHERE id_exp = 5");
$description5 = $result18->fetch(PDO::FETCH_OBJ);

$result19 = $pdo->query("SELECT date FROM experience WHERE id_exp = 5");
$date5 = $result19->fetch(PDO::FETCH_OBJ);


// Requêtes SQL pour l'id_exp 6

$result20 = $pdo->query("SELECT metier FROM experience WHERE id_exp = 6");
$metier6 = $result20->fetch(PDO::FETCH_OBJ); 

$result21 = $pdo->query("SELECT entreprise FROM experience WHERE id_exp = 6");
$entreprise6 = $result21->fetch(PDO::FETCH_OBJ); 

$result22 = $pdo->query("SELECT description FROM experience WHERE id_exp = 6");
$description6 = $result22->fetch(PDO::FETCH_OBJ);

$result23 = $pdo->query("SELECT date FROM experience WHERE id_exp = 6");
$date6 = $result23->fetch(PDO::FETCH_OBJ);


// Requêtes SQL pour l'id_exp 7

$result24 = $pdo->query("SELECT metier FROM experience WHERE id_exp = 7");
$metier7 = $result24->fetch(PDO::FETCH_OBJ); 

$result25 = $pdo->query("SELECT entreprise FROM experience WHERE id_exp = 7");
$entreprise7 = $result25->fetch(PDO::FETCH_OBJ); 

$result26 = $pdo->query("SELECT description FROM experience WHERE id_exp = 7");
$description7 = $result26->fetch(PDO::FETCH_OBJ);

$result27 = $pdo->query("SELECT date FROM experience WHERE id_exp = 7");
$date7 = $result27->fetch(PDO::FETCH_OBJ);


?>