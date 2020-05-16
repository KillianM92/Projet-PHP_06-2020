<?php require("inc/header_log.inc.php"); ?>

<hr>

<form method="POST" action="">
  <div class="form-group" style="width: 400px;">
    <label for="pseudo">Username</label>
    <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Username">
  </div>
<div class="form-group" style="width: 400px;">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="Password" name="password" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="souvenir" name="souvenir">
    <label>Maintenir la connexion ?</label>
  </div>
  <button type="submit" class="btn btn-primary">Se connecter</button>
</form>

<hr>

<a href="index.php">
    <h6>Revenir à la page de mon CV</h6>
</a>

<?php
session_start();

if (!empty($_POST)) {
    $_SESSION['pseudo'] = $_POST['pseudo'];
    $_SESSION['password'] = $_POST['password'];
}

var_dump($_SESSION);

?>

<?php
if (isset($_POST['souvenir']))
{
$expire = time() + 1200;
// J'ai choisi de prendre une connexion qui expire au bout de 1200 secondes (20 minutes) car l'utilisateur n'a pas besoin de rester sur la page d'administration pour faire des modifications pendant des heures.
setcookie('pseudo', $_SESSION['pseudo'], $expire); 
}
?>

