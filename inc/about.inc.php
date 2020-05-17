<?php require("data/about_sql.inc.php"); ?>

<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="w-100">
        <h1 class="mb-0"><?php echo $prenom1->prenom?>
          <span class="text-primary"><?php echo $nom1->nom?></span>
        </h1>
        <div class="subheading mb-5"><?php echo $adresse1->adresse?> · <?php echo $ville1->ville?>, <?php echo $province1->province?>, <?php echo $codepostal1->codepostal?> · <?php echo $numero_tel1->numero_tel?> ·
          <a href="mailto:killian.moutinard@ynov.com"><?php echo $email1->email?></a>
        </div>
        <p class="lead mb-5"><?php echo $description1->description?></p>
        <div class="social-icons">
          <a href="https://github.com/KillianM92">
            <i class="fab fa-github"></i>
          </a>
          <a href="https://twitter.com/K_Moutinard12">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="https://www.facebook.com/killian.moutinard">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="https://www.instagram.com/k.moutinard12/?hl=fr">
            <i class="fab fa-instagram"></i>
          </a>
        </div>
      </div>
    </section>

    <hr class="m-0">