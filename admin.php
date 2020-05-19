<?php require("inc/header.inc.php"); ?>

<?php require("data/data.inc.php"); ?>
<?php 
// phpinfo();
session_start();
if (!isset($_SESSION['username']) || $_SESSION['username'] !== 'killian') {
    header('Location: connexion.php');
}
?>
<br>

<section style="padding-left: 400px;">

    <h3>Section "A propos"</h3>

    <div class="input-group mb-3" style="width: 400px;">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Prénom</span>
    </div>
    <input type="text" class="form-control" name="prenom" aria-describedby="basic-addon1">
    </div>
        <form method="POST" action=""style="padding-left: 600px;">
            <button type="submit" class="btn btn-danger" name="logout">Déconnexion</button>
        </form>

    <button type="button" class="btn btn-outline-success">Ajouter</button>
    <button type="button" class="btn btn-outline-warning">Modifier</button>
    <button type="button" class="btn btn-outline-danger">Supprimer</button>

    <br>
    <br>
        // Mise en place de la déconnexion de la page admin.php
        if (isset($_POST['logout']))
        {
        unset($_SESSION['username']);  
        session_destroy();
        header('Location: index.php');
        }

    <div class="input-group mb-3" style="width: 400px;">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Nom</span>
    </div>
    <input type="text" class="form-control" name="nom" aria-describedby="basic-addon1">
    </div>

    <button type="button" class="btn btn-outline-success">Ajouter</button>
    <button type="button" class="btn btn-outline-warning">Modifier</button>
    <button type="button" class="btn btn-outline-danger">Supprimer</button>

    <br>
    <br>

    <div class="input-group mb-3" style="width: 400px;">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Adresse</span>
    </div>
    <input type="text" class="form-control" name="adresse" aria-describedby="basic-addon1">
    </div>

    <button type="button" class="btn btn-outline-success">Ajouter</button>
    <button type="button" class="btn btn-outline-warning">Modifier</button>
    <button type="button" class="btn btn-outline-danger">Supprimer</button>

    <br>
    <br>

    <div class="input-group mb-3" style="width: 400px;">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Ville</span>
    </div>
    <input type="text" class="form-control" name="ville" aria-describedby="basic-addon1">
    </div>

    <button type="button" class="btn btn-outline-success">Ajouter</button>
    <button type="button" class="btn btn-outline-warning">Modifier</button>
    <button type="button" class="btn btn-outline-danger">Supprimer</button>
    <br>
    <br>

    <div class="input-group mb-3" style="width: 400px;">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Province</span>
    </div>
    <input type="text" class="form-control" name="province" aria-describedby="basic-addon1">
    </div>

    <button type="button" class="btn btn-outline-success">Ajouter</button>
    <button type="button" class="btn btn-outline-warning">Modifier</button>
    <button type="button" class="btn btn-outline-danger">Supprimer</button>

    <br>
    <br>

    <div class="input-group mb-3" style="width: 400px;">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Code Postal</span>
    </div>
    <input type="number" class="form-control" name="codepostal" aria-describedby="basic-addon1">
    </div>

    <button type="button" class="btn btn-outline-success">Ajouter</button>
    <button type="button" class="btn btn-outline-warning">Modifier</button>
    <button type="button" class="btn btn-outline-danger">Supprimer</button>

    <br>
    <br>

    <div class="input-group mb-3" style="width: 400px;">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Numéro de téléphone</span>
    </div>
    <input type="number" class="form-control" name="tel" aria-describedby="basic-addon1">
    </div>

    <button type="button" class="btn btn-outline-success">Ajouter</button>
    <button type="button" class="btn btn-outline-warning">Modifier</button>
    <button type="button" class="btn btn-outline-danger">Supprimer</button>

    <br>
    <br>

    <div class="input-group mb-3" style="width: 400px;">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Email</span>
    </div>
    <input type="text" class="form-control" name="email" aria-describedby="basic-addon1">
    </div>

    <button type="button" class="btn btn-outline-success">Ajouter</button>
    <button type="button" class="btn btn-outline-warning">Modifier</button>
    <button type="button" class="btn btn-outline-danger">Supprimer</button>

    <br>
    <br>

    <div class="input-group" style="width: 400px;">
    <div class="input-group-prepend">
        <span class="input-group-text">Description</span>
    </div>
    <textarea class="form-control" name="description_about"></textarea>
    </div>

    <button type="button" class="btn btn-outline-success">Ajouter</button>
    <button type="button" class="btn btn-outline-warning">Modifier</button>
    <button type="button" class="btn btn-outline-danger">Supprimer</button>

    <br>
    <br>

</section>

<hr style="padding-left: 400px; width: 400px;">

<section style="padding-left: 400px;">

    <h3>Section "Expériences"</h3>

    <div class="input-group mb-3" style="width: 400px;">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Métier</span>
    </div>
    <input type="text" class="form-control" name="metier" aria-describedby="basic-addon1">
    </div>

    <button type="button" class="btn btn-outline-success">Ajouter</button>
    <button type="button" class="btn btn-outline-warning">Modifier</button>
    <button type="button" class="btn btn-outline-danger">Supprimer</button>

    <br>
    <br>

    <div class="input-group mb-3" style="width: 400px;">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Entreprise</span>
    </div>
    <input type="text" class="form-control" name="entreprise" aria-describedby="basic-addon1">
    </div>

    <button type="button" class="btn btn-outline-success">Ajouter</button>
    <button type="button" class="btn btn-outline-warning">Modifier</button>
    <button type="button" class="btn btn-outline-danger">Supprimer</button>

    <br>
    <br>

    <div class="input-group" style="width: 400px;">
    <div class="input-group-prepend">
        <span class="input-group-text">Description</span>
    </div>
    <textarea class="form-control" name="description_exp"></textarea>
    </div>

    <button type="button" class="btn btn-outline-success">Ajouter</button>
    <button type="button" class="btn btn-outline-warning">Modifier</button>
    <button type="button" class="btn btn-outline-danger">Supprimer</button>

    <br>
    <br>

    <div class="input-group mb-3" style="width: 400px;">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Date</span>
    </div>
    <input type="text" class="form-control" name="date" aria-describedby="basic-addon1">
    </div>

    <button type="button" class="btn btn-outline-success">Ajouter</button>
    <button type="button" class="btn btn-outline-warning">Modifier</button>
    <button type="button" class="btn btn-outline-danger">Supprimer</button>

    <br>
    <br>

</section>

<hr style="padding-left: 400px; width: 400px;">

<section style="padding-left: 400px;">

    <h3>Section "Formation"</h3>

    <div class="input-group mb-3" style="width: 400px;">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Ecole</span>
    </div>
    <input type="text" class="form-control" name="ecole" aria-describedby="basic-addon1">
    </div>

    <button type="button" class="btn btn-outline-success">Ajouter</button>
    <button type="button" class="btn btn-outline-warning">Modifier</button>
    <button type="button" class="btn btn-outline-danger">Supprimer</button>

    <br>
    <br>

    <div class="input-group mb-3" style="width: 400px;">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Filière</span>
    </div>
    <input type="text" class="form-control" name="filiere" aria-describedby="basic-addon1">
    </div>

    <button type="button" class="btn btn-outline-success">Ajouter</button>
    <button type="button" class="btn btn-outline-warning">Modifier</button>
    <button type="button" class="btn btn-outline-danger">Supprimer</button>

    <br>
    <br>

    <div class="input-group" style="width: 400px;">
    <div class="input-group-prepend">
        <span class="input-group-text">Description</span>
    </div>
    <textarea class="form-control" name="description_formation"></textarea>
    </div>

    <button type="button" class="btn btn-outline-success">Ajouter</button>
    <button type="button" class="btn btn-outline-warning">Modifier</button>
    <button type="button" class="btn btn-outline-danger">Supprimer</button>

    <br>
    <br>

</section>

<hr style="padding-left: 400px; width: 400px;">

<section style="padding-left: 400px;">

    <h3>Section "Compétences"</h3>

    <div class="input-group" style="width: 400px;">
    <div class="input-group-prepend">
        <span class="input-group-text">Description</span>
    </div>
    <textarea class="form-control" name="description_skill"></textarea>
    </div>

    <button type="button" class="btn btn-outline-success">Ajouter</button>
    <button type="button" class="btn btn-outline-warning">Modifier</button>
    <button type="button" class="btn btn-outline-danger">Supprimer</button>

    <br>
    <br>

</section>

<hr style="padding-left: 400px; width: 400px;">

<section style="padding-left: 400px;">

    <h3>Section "Centres d'intérêts"</h3>

    <div class="input-group" style="width: 400px;">
    <div class="input-group-prepend">
        <span class="input-group-text">Description</span>
    </div>
    <textarea class="form-control" name="description_interest"></textarea>
    </div>

    <button type="button" class="btn btn-outline-success">Ajouter</button>
    <button type="button" class="btn btn-outline-warning">Modifier</button>
    <button type="button" class="btn btn-outline-danger">Supprimer</button>

    <br>
    <br>

</section>

<hr style="padding-left: 400px; width: 400px;">

<section style="padding-left: 400px;">

    <h3>Section "Diplômes"</h3>

    <div class="input-group" style="width: 400px;">
    <div class="input-group-prepend">
        <span class="input-group-text">Description</span>
    </div>
    <textarea class="form-control" name="description_award"></textarea>
    </div>

    <button type="button" class="btn btn-outline-success">Ajouter</button>
    <button type="button" class="btn btn-outline-warning">Modifier</button>
    <button type="button" class="btn btn-outline-danger">Supprimer</button>

    <br>
    <br>

</section>

<hr style="padding-left: 400px; width: 400px;">

<div style="padding-left: 500px;">
    <a href="index.php">
        <h6>Revenir à la page de mon CV</h6>
    </a>
</div>

<br>
<br>