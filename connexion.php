<?php require("inc/header_log.inc.php"); ?>
<?php require("data/login_sql.inc.php"); ?>

<hr style="padding-left: 400px; width: 400px;">

<form method="POST" action="" style="padding-left: 400px;">
  <div class="form-group" style="width: 400px;">
    <label for="pseudo">Username</label>
    <input type="text" class="form-control" name="username" placeholder="Username">
  </div>
<div class="form-group" style="width: 400px;">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Se connecter</button>
  <button type="submit" class="btn btn-danger" name="logout">Déconnexion</button>
</form>

<hr style="padding-left: 400px; width: 400px;">

<div style="padding-left: 400px;">
  <a href="index.php">
      <h7>Revenir à la page de mon CV</h7>
  </a>
</div>

<?php
session_start();

$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];

// var_dump($_SESSION);

if ($_SESSION['username'] == $username1->username & $_SESSION['password'] == $password1->password) {
  echo '<hr style="padding-left: 400px; width: 400px;">';
  include("admin.php");
} else {
  echo '<h4 style="padding-left: 400px;">Erreur de connexion !</h4>';
  echo '<hr style="padding-left: 400px; width: 400px;">';
}

?>

<?php

// Mise en place de la déconnexion de la page 'admin'
if (isset($_POST['logout']))
{
unset($_SESSION['username']); 
unset($_SESSION['password']); 
session_destroy();
header('Location: index.php');
}
?>