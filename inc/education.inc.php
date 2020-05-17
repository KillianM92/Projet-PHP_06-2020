<?php require("data/education_sql.inc.php"); ?>
    
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
      <div class="w-100">
        <h2 class="mb-5">Formation</h2>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0"><?php echo $lieu1->lieu;?></h3>
            <div class="subheading mb-3"><?php echo $filiere1->filiere;?></div>
            <div><?php echo $description1->description_1;?></div>
            <div><?php echo $description2->description_2;?></div>
            <div><?php echo $description3->description_3;?></div>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary"><?php echo $date1->date;?></span>
          </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between">
          <div class="resume-content">
            <h3 class="mb-0"><?php echo $lieu2->lieu;?></h3>
            <div class="subheading mb-3"><?php echo $filiere2->filiere;?></div>
            <p><?php echo $description4->description_1;?></p>
            <div><?php echo $description5->description_2;?></div>
            <div><?php echo $description6->description_3;?></div>
            <div><?php echo $description7->description_4;?></div>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary"><?php echo $date2->date;?></span>
          </div>
        </div>

      </div>
    </section>

    <hr class="m-0">