<?php

include("../template/header.php");

foreach ($showProjet as $key => $select) {
  # code...

// $article = $_GET['id'];
 ?>



 <div class="container mt-5 mb-5">

   <div class="card text-center">
     <div class="card-header">
       <?php echo $select['nom_Projet']; ?></p>
     </div>
     <div class="card-block">
       <h4 class="card-title"><?php echo $select['infos'];?></h4>
       <!-- <p class="card-text"><?php echo $select['date_limite'];?></p> -->
       <a href="#" class="btn btn-primary">Ajouter un sous-prjet</a>
     </div>
     <div class="card-footer text-muted">
       <?php echo $select['date_limite'];?>
     </div>
   </div>


            </div>
<?php
}
 ?>
