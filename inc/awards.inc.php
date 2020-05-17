<?php require("data/awards_sql.inc.php"); ?>

<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="awards">
    <div class="w-100">
        <h2 class="mb-5">Diplômes &amp; Certifications</h2>
        <ul class="fa-ul mb-0">
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            <?php echo $description1->description?></li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            <?php echo $description2->description?></li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            <?php echo $description3->description?></li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            <?php echo $description4->description?></li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            <?php echo $description5->description?>
            </li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            <?php echo $description6->description?></li>
        </ul>
    </div>
</section>