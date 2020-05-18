<?php require("data/skills_sql.inc.php"); ?>
    
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="skills">
      <div class="w-100">
        <h2 class="mb-5">Compétences</h2>

        <div class="subheading mb-3">Langages de programmation &amp; Outils techniques</div>
        <ul class="list-inline dev-icons">
          <li class="list-inline-item">
            <i class="fab fa-html5"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-css3-alt"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-js-square"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-php"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-windows"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-linux"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-git"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-python"></i>
          </li>
        </ul>

        <div class="subheading mb-3">Compétences transverses</div>
        <ul class="fa-ul mb-0">
          <li>
            <i class="fa-li fa fa-check"></i>
            <?php echo $skill1->description; ?></li>
          <li>
            <i class="fa-li fa fa-check"></i>
            <?php echo $skill2->description; ?></li>
          <li>
            <i class="fa-li fa fa-check"></i>
            <?php echo $skill3->description; ?></li>
          <li>
            <i class="fa-li fa fa-check"></i>
            <?php echo $skill4->description; ?></li>
          <li>
            <i class="fa-li fa fa-check"></i>
            <?php echo $skill5->description; ?></li>
          <li>
            <i class="fa-li fa fa-check"></i>
            <?php echo $skill6->description; ?></li>
        </ul>
      </div>
    </section>

    <hr class="m-0">