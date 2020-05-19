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


        <form method="POST" action=""style="padding-left: 600px;">
            <button type="submit" class="btn btn-danger" name="logout">Déconnexion</button>
        </form>

        <?php 

        // Mise en place de la déconnexion de la page admin.php
        if (isset($_POST['logout']))
        {
        unset($_SESSION['username']);  
        session_destroy();
        header('Location: index.php');
        }

        // Affichage du message d'ajout si ce dernier a besoin d'être affiché
        // Il est ensuite supprimé grâce à l'attribut unset($_SESSION['message']).
        
        if (isset($_SESSION['message'])) {
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            } ?>

    <h3>Section "A propos"</h3>
    <form action="admin_post.php" method="post">

        <div class="input-group mb-3" style="width: 400px;">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Prénom</span>
        </div>
        <input type="text" class="form-control" name="prenom" aria-describedby="basic-addon1">
        </div>

    <div class="input-group mb-3" style="width: 400px;">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Nom</span>
    </div>
    <input type="text" class="form-control" name="nom" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3" style="width: 400px;">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Adresse</span>
    </div>
    <input type="text" class="form-control" name="adresse" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3" style="width: 400px;">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Ville</span>
    </div>
    <input type="text" class="form-control" name="ville" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3" style="width: 400px;">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Province</span>
    </div>
    <input type="text" class="form-control" name="province" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3" style="width: 400px;">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Code Postal</span>
    </div>
    <input type="number" class="form-control" name="codepostal" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3" style="width: 400px;">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Numéro de téléphone</span>
    </div>
    <input type="number" class="form-control" name="tel" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3" style="width: 400px;">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Email</span>
    </div>
    <input type="text" class="form-control" name="email" aria-describedby="basic-addon1">
    </div>

    <div class="input-group" style="width: 400px;">
    <div class="input-group-prepend">
        <span class="input-group-text">Description</span>
    </div>
    <textarea class="form-control" name="description_about"></textarea>
    </div>

    <button type="submit" class="btn btn-outline-success" name="add-1">Ajouter</button>
    
    <button type="submit" class="btn btn-outline-warning" name="modify-1">Modifier</button>

        <?php 
        if (isset($_POST['modify-1'])) {
            $requete2sql = "UPDATE about SET (prenom, nom, adresse, ville, province, codepostal, numero_tel, email, description) VALUES ('$_POST[prenom]', '$_POST[nom]', '$_POST[adresse]', '$_POST[ville]', '$_POST[province]', '$_POST[codepostal]', '$_POST[numero_tel]', '$_POST[email]', '$_POST[description_about]');";
            echo $requete2sql;
            $result2 = $pdo->exec($requete2sql);
            echo $result2 . ' modification a été enregistrée.<br>';
        }?>

        <button type="submit" class="btn btn-outline-danger" name="delete-1">Supprimer</button>

        <?php 
        if (isset($_POST['delete-1'])) {
            $requete3sql = "UPDATE about SET deletion_flag VALUE (1) WHERE id_people;";
            echo $requete3sql;
            $result3 = $pdo->exec($requete3sql);
            echo $result3 . ' suppresion a été enregistrée.<br>';
        }?>

    </form>
    <br>
    <br>

</section>

<hr style="padding-left: 400px; width: 400px;">

<section style="padding-left: 400px;">

    <h3>Section "Expériences"</h3>
    <form action="admin_post.php" method="post">

        <div class="input-group mb-3" style="width: 400px;">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Métier</span>
        </div>
        <input type="text" class="form-control" name="metier" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3" style="width: 400px;">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Entreprise</span>
        </div>
        <input type="text" class="form-control" name="entreprise" aria-describedby="basic-addon1">
        </div>

        <div class="input-group" style="width: 400px;">
        <div class="input-group-prepend">
            <span class="input-group-text">Description</span>
        </div>
        <textarea class="form-control" name="description_exp"></textarea>
        </div>

        <div class="input-group mb-3" style="width: 400px;">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Date</span>
        </div>
        <input type="text" class="form-control" name="date_exp" aria-describedby="basic-addon1">
        </div>

        <button type="submit" class="btn btn-outline-success" name="add-2">Ajouter</button>

        <?php if (isset($_SESSION['message'])) {
                echo $_SESSION['message'];
                unset($_SESSION['message']);
        } ?>

        <button type="submit" class="btn btn-outline-warning" name="modify-2">Modifier</button>

        <?php 
            if (isset($_POST['modify-2'])) {
                $requete5sql = "UPDATE experience SET (metier, entreprise, description, date) VALUES ('$_POST[metier]', '$_POST[entreprise]', '$_POST[description_exp]', '$_POST[date]');";
                echo $requete5sql;
                $result5 = $pdo->exec($requete5sql);
                echo $result5 . ' modification a été enregistrée.<br>';
            }?>

        <button type="submit" class="btn btn-outline-danger" name="delete-2">Supprimer</button>

        <?php 
            if (isset($_POST['delete-2'])) {
                $requete6sql = "UPDATE experience SET deletion_flag VALUE (1);";
                echo $requete6sql;
                $result6 = $pdo->exec($requete6sql);
                echo $result6 . ' suppresion a été enregistrée.<br>';
            }?>
    
    </form>
    <br>
    <br>

</section>

<hr style="padding-left: 400px; width: 400px;">

<section style="padding-left: 400px;">

    <h3>Section "Formation"</h3>
    <form action="admin_post.php" method="post">

        <div class="input-group mb-3" style="width: 400px;">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Ecole</span>
        </div>
        <input type="text" class="form-control" name="ecole" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3" style="width: 400px;">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Filière</span>
        </div>
        <input type="text" class="form-control" name="filiere" aria-describedby="basic-addon1">
        </div>

        <div class="input-group" style="width: 400px;">
        <div class="input-group-prepend">
            <span class="input-group-text">Description</span>
        </div>
        <textarea class="form-control" name="description_formation"></textarea>
        </div>
        
        <div class="input-group mb-3" style="width: 400px;">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Date</span>
        </div>
        <input type="text" class="form-control" name="date_formation" aria-describedby="basic-addon1">
        </div>

        <button type="submit" class="btn btn-outline-success" name="add-3">Ajouter</button>

        <button type="submit" class="btn btn-outline-warning" name="modify-3">Modifier</button>

        <?php 
            if (isset($_POST['modify-3'])) {
                $requete8sql = "UPDATE formation SET (lieu, filiere, description_1, date) VALUES ('$_POST[ecole]', '$_POST[filiere]', '$_POST[description_formation]', '$_POST[date]')";
                echo $requete8sql;
                $result8 = $pdo->exec($requete8sql);
                echo $result8 . ' modification a été enregistrée.<br>';
            }?>

        <button type="submit" class="btn btn-outline-danger" name="delete-3">Supprimer</button>

        <?php 
            if (isset($_POST['delete-3'])) {
                $requete9sql = "UPDATE formation SET deletion_flag VALUE (1);";
                echo $requete9sql;
                $result9 = $pdo->exec($requete9sql);
                echo $result9 . ' suppresion a été enregistrée.<br>';
            }?>
    
    </form>
    <br>
    <br>

</section>

<hr style="padding-left: 400px; width: 400px;">

<section style="padding-left: 400px;">

    <h3>Section "Compétences"</h3>
    <form action="admin_post.php" method="post">

        <div class="input-group" style="width: 400px;">
        <div class="input-group-prepend">
            <span class="input-group-text">Description</span>
        </div>
        <textarea class="form-control" name="description_skill"></textarea>
        </div>

        <button type="submit" class="btn btn-outline-success" name="add-4">Ajouter</button>

        <button type="submit" class="btn btn-outline-warning" name="modify-4">Modifier</button>

        <?php 
            if (isset($_POST['modify-4'])) {
                $requete11sql = "UPDATE skills SET description VALUE ('$_POST[description_skill]')";
                echo $requete11sql;
                $result11 = $pdo->exec($requete11sql);
                echo $result11 . ' modification a été enregistrée.<br>';
            }?>

        <button type="submit" class="btn btn-outline-danger" name="delete-4">Supprimer</button>

        <?php 
            if (isset($_POST['delete-4'])) {
                $requete12sql = "UPDATE skills SET deletion_flag VALUE (1);";
                echo $requete12sql;
                $result12 = $pdo->exec($requete12sql);
                echo $result12 . ' suppresion a été enregistrée.<br>';
            }?>
    
    </form>
    <br>
    <br>

</section>

<hr style="padding-left: 400px; width: 400px;">

<section style="padding-left: 400px;">

    <h3>Section "Centres d'intérêts"</h3>
    <form action="admin_post.php" method="post">

        <div class="input-group" style="width: 400px;">
        <div class="input-group-prepend">
            <span class="input-group-text">Description</span>
        </div>
        <textarea class="form-control" name="description_interest"></textarea>
        </div>

        <button type="submit" class="btn btn-outline-success" name="add-5">Ajouter</button>

        <button type="submit" class="btn btn-outline-warning">Modifier</button>

        <?php 
            if (isset($_POST['modify-4'])) {
                $requete11sql = "UPDATE skills SET description VALUE ('$_POST[description_skill]')";
                echo $requete11sql;
                $result11 = $pdo->exec($requete11sql);
                echo $result11 . ' modification a été enregistrée.<br>';
            }?>

        <button type="submit" class="btn btn-outline-danger">Supprimer</button>
    
    </form>
    <br>
    <br>

</section>

<hr style="padding-left: 400px; width: 400px;">

<section style="padding-left: 400px;">

    <h3>Section "Diplômes"</h3>
    <form action="admin_post.php" method="post">

        <div class="input-group" style="width: 400px;">
        <div class="input-group-prepend">
            <span class="input-group-text">Description</span>
        </div>
        <textarea class="form-control" name="description_award"></textarea>
        </div>

        <button type="submit" class="btn btn-outline-success" name="add-6">Ajouter</button>
        <button type="submit" class="btn btn-outline-warning" name="modify-6">Modifier</button>
        <button type="submit" class="btn btn-outline-danger" name="delete-6">Supprimer</button>

    </form>
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