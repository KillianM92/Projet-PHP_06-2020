<?php 

require("data/data.inc.php");
// On doit garder la session active lorsque l'on passe de la page admin.php à admin_post.php, on a donc besoin d'éxécuter un session_start().
session_start();

//Mise en place d'une condition qui vérifie si un $_POST a été effectué sinon l'utilisateur n'a pas à se retrouver sur cette page et est directement redirigé vers la page d'administration.

if (!isset($_POST)) {
    header('Location: admin.php');
}

// Requêtes d'ajout de données pour les 5 sections car je ne trouve pas ça utile de rajouter un utilisateur puisque la page a pour but d'être un CV.
// On utilise le nom du bouton défini dans le formulaire pour cibler l'action d'ajout
// Ensuite on effectue la requête pour tout le formulaire donc il faut bien penser à ajouter toutes les infos d'un coup !
// Pour finir, l'utilisateur est redirigé vers la page admin.php avec un message qui s'affiche à côté du bouton "Ajouter".

// Syntaxe : on met les noms de table entre `` (ALTGR + 7) pour que SQL nous affiche pas d'erreur et qu'il puisse bien comprendre le type de données récupérées comme c'est le cas avec les colonne date et description. 


        // Requête d'ajout pour la table experience

        if (isset($_POST['add-2'])) {
            $requete2sql = "INSERT INTO `experience` 
                            SET `metier`= '".$_POST['metier']."', 
                                `entreprise`= '".$_POST['entreprise']."',
                                `description`= '".$_POST['description_exp']."',
                                `date`= '".$_POST['date_exp']."';";
            $result2 = $pdo->exec($requete2sql);
            $_SESSION['message'] = "L'enregistrement a été fait.";
        }


        // Requête d'ajout pour la table formation

        if (isset($_POST['add-3'])) {
            $requete3sql = "INSERT INTO `formation` 
                            SET `lieu`= '".$_POST['ecole']."', 
                                `filiere`= '".$_POST['filiere']."',
                                `description_1`= '".$_POST['description_formation']."',
                                `date`= '".$_POST['date_formation']."';";
            $result3 = $pdo->exec($requete3sql);
            $_SESSION['message'] = "L'enregistrement a été fait.";
        }


        // Requête d'ajout pour la table skills

         if (isset($_POST['add-4'])) {
            $requete4sql = "INSERT INTO `skills` 
                            SET `description`= '".$_POST['description_skill']."';";
            $result4 = $pdo->exec($requete4sql);
            $_SESSION['message'] = "L'enregistrement a été fait.";
        }


        // Requête d'ajout pour la table interest

        if (isset($_POST['add-5'])) {
            $requete5sql = "INSERT INTO `interest` 
                            SET `description`= '".$_POST['description_interest']."';";
            $result5 = $pdo->exec($requete5sql);
            $_SESSION['message'] = "L'enregistrement a été fait.";
        }


        // Requête d'ajout pour la table diplomes

        if (isset($_POST['add-6'])) {
            $requete6sql = "INSERT INTO `diplomes` 
                            SET `description`= '".$_POST['description_award']."';";
            $result6 = $pdo->exec($requete6sql);
            $_SESSION['message'] = "L'enregistrement a été fait.";
        }

// Redirection vers la page admin.php lorsque la requête a été effectuée
header('Location: admin.php');

?>