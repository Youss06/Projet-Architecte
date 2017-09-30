<?php

include("../template/header.php");

foreach ($showProjet as $key => $select) {
  # code...

// $article = $_GET['id'];
 ?>



 <div class="container mt-5 mb-5">

   <div style="background-color:rgba(250,250,250,0.4)" class="card text-center">
     <div style="background-color:rgba(250,250,250,0.4)" class="card-header">
       <?php echo $select['nom_Projet']; ?></p>
     </div>
     <div class="card-block">
       <h4 class="card-title"><?php echo $select['infos'];?></h4>
       <!-- <p class="card-text"><?php echo $select['date_limite'];?></p> -->
       <a href="../vue/FormSubStepVue.php" class="btn btn-primary">Ajouter un sous-projet</a>
     </div>
     <div style="background-color:rgba(250,250,250,0.4)" class="card-footer text-muted">
       <?php echo $select['date_limite'];?>
     </div>
   </div>


            </div>
<?php
}
 ?>
