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

    <br>

    <div style="padding-left: 150px;">
        <button type="submit" class="btn btn-outline-warning" name="modify-1">Modifier</button>
    </div>

    </form>

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

        <div style="padding-left: 150px;">
            <button type="submit" class="btn btn-outline-success" name="add-2">Ajouter</button>
        </div>

        <br>

        <p>Veuillez cliquer sur l'expérience que vous voulez supprimer !</p>

        <?php
            $experiences = $pdo->query("SELECT * FROM experience WHERE deletion_flag IS NULL");

            while ($experience = $experiences->fetch(PDO::FETCH_OBJ)) { ?>

                <div style="width: 400px;">
                <!-- Affichage des valeurs de la colonne description -->
                    <a href="admin.php?delete=<?php echo $experience->id_exp; ?>"><?php echo $experience->metier . '<hr>';?></a>
                </div>
                <?php
                if(!empty($_GET["delete"])) {
                    // Modification du deletion_flag lorsqu'on clique sur la valeur à supprimer
                    $pdo->exec("UPDATE experience SET deletion_flag = 1 WHERE id_exp= '$_GET[delete]' ");                 
                }
            }?>

    </form>

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

        <div style="padding-left: 150px;">
            <button type="submit" class="btn btn-outline-success" name="add-3">Ajouter</button>
        </div>

        <br>

        <p>Veuillez cliquer sur la formation que vous voulez supprimer !</p>

        <?php
            $formations = $pdo->query("SELECT * FROM formation WHERE deletion_flag IS NULL");

            while ($formation = $formations->fetch(PDO::FETCH_OBJ)) { ?>

                <div style="width: 400px;">
                <!-- Affichage des valeurs de la colonne description -->
                    <a href="admin.php?delete=<?php echo $formation->id_formation; ?>"><?php echo $formation->lieu . '<hr>';?></a>
                </div>
                <?php
                if(!empty($_GET["delete"])) {
                    // Modification du deletion_flag lorsqu'on clique sur la valeur à supprimer
                    $pdo->exec("UPDATE formation SET deletion_flag = 1 WHERE id_formation= '$_GET[delete]' ");                 
                }
            }?>

    </form>

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

        <div style="padding-left: 150px; padding-top: 20px;">
            <button type="submit" class="btn btn-outline-success" name="add-4">Ajouter</button>
        </div>

        <br>

        <p>Veuillez cliquer sur la compétence que vous voulez supprimer !</p>

        <?php
            $skills = $pdo->query("SELECT * FROM skills WHERE deletion_flag IS NULL");

            while ($skill = $skills->fetch(PDO::FETCH_OBJ)) { ?>

                <div style="width: 400px;">
                <!-- Affichage des valeurs de la colonne description -->
                    <a href="admin.php?delete=<?php echo $skill->id_skill; ?>"><?php echo $skill->description . '<hr>';?></a>
                </div>
                <?php
                if(!empty($_GET["delete"])) {
                    // Modification du deletion_flag lorsqu'on clique sur la valeur à supprimer
                    $pdo->exec("UPDATE skills SET deletion_flag = 1 WHERE id_skill = '$_GET[delete]' ");                 
                }
            }?>

    </form>

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

        <div style="padding-left: 150px; padding-top: 20px;">
            <button type="submit" class="btn btn-outline-success" name="add-5">Ajouter</button>
        </div>

        <br>
        <p>Veuillez cliquer sur le centre d'intérêts que vous voulez supprimer !</p>

        <?php
            $interests = $pdo->query("SELECT * FROM interest WHERE deletion_flag IS NULL");

            while ($interest = $interests->fetch(PDO::FETCH_OBJ)) { ?>

                <div style="width: 400px;">
                <!-- Affichage des valeurs de la colonne description -->
                    <a href="admin.php?delete=<?php echo $interest->id_interest; ?>"><?php echo $interest->description . '<hr>';?></a>
                </div>
                <?php
                if(!empty($_GET["delete"])) {
                    // Modification du deletion_flag lorsqu'on clique sur la valeur à supprimer
                    $pdo->exec("UPDATE interest SET deletion_flag = 1 WHERE id_interest = '$_GET[delete]' ");                 
                }
            }?>

    </form>

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

        <div style="padding-left: 150px; padding-top: 20px;">
            <button type="submit" class="btn btn-outline-success" name="add-6">Ajouter</button>
        </div>

        <br>
        <p>Veuillez cliquer sur le diplôme que vous voulez supprimer !</p>

        <?php
            $awards = $pdo->query("SELECT * FROM diplomes WHERE deletion_flag IS NULL");

            while ($award = $awards->fetch(PDO::FETCH_OBJ)) { ?>

                <div style="width: 400px;">
                <!-- Affichage des valeurs de la colonne description -->
                    <a href="admin.php?delete=<?php echo $award->id_diplome; ?>"><?php echo $award->description . '<hr>';?></a>
                </div>
                <?php
                if(!empty($_GET["delete"])) {
                    // Modification du deletion_flag lorsqu'on clique sur la valeur à supprimer
                    $pdo->exec("UPDATE diplomes SET deletion_flag = 1 WHERE id_diplome = '$_GET[delete]' ");                 
                }
            }?>

    </form>

</section>

<hr style="padding-left: 400px; width: 400px;">

<div style="padding-left: 500px;">
    <a href="index.php">
        <h6>Revenir à la page de mon CV</h6>
    </a>
</div>

<br>
<br>