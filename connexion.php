<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Connexion à Mon CV</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="css/resume.min.css" rel="stylesheet">

</head>

<form>
  <div class="form-group" style="width: 400px;">
    <label for="pseudo">Username</label>
    <input type="text" class="form-control" id="pseudo" name="pseudo">
  </div>
<div class="form-group" style="width: 400px;">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="souvenir" name="souvenir">
    <label>Se souvenir de moi ?</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
if (isset($_POST['souvenir']))
{
$expire = time() + 1200;
// J'ai choisi de prendre une connexion qui expire au bout de 1200 secondes (20 minutes) car l'utilisateur n'a pas besoin de rester sur la page d'administration pour faire des modifications pendant des heures.
setcookie('pseudo', $_SESSION['pseudo'], $expire); 
}
?>

