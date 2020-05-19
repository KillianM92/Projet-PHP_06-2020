<?php require("inc/header.inc.php"); ?>
<?php require("data/data.inc.php"); ?>
<?php 

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
    <button type="submit" class="btn btn-outline-danger" name="delete-1">Supprimer</button>

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
        <button type="submit" class="btn btn-outline-warning" name="modify-2">Modifier</button>
        <button type="submit" class="btn btn-outline-danger" name="delete-2">Supprimer</button>

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
        <button type="submit" class="btn btn-outline-danger" name="delete-3">Supprimer</button>

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
        <br>
        <br>
        <p>Veuillez cliquer sur la valeur que vous voulez supprimer !</p>

        <?php
            $skills = $pdo->query("SELECT * FROM skills");

            while ($skill = $skills->fetch(PDO::FETCH_OBJ)) { ?>

                <a href="admin.php?delete=<?php echo $skill->id_skill; ?>"><?php echo $skill->description . ' | ';?></a>

                <?php
                if(!empty($_GET["delete"])) {
                    // Affichage des valeurs de la colonne description et modification du deletion_flag lorsqu'on clique dessus
                    $pdo->exec("UPDATE skills SET deletion_flag = 1 WHERE id_skill = '$_GET[delete]' ");                 
                }
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