<?php

include("../template/header.php");

// foreach ($showProjet as $key => $select) {
//   # code...
//
// // $article = $_GET['id'];
//  ?>



 <div class="container mt-5 mb-5">

   <div style="background-color:rgba(250,250,250,0.4)" class="card text-center">
     <div style="background-color:rgba(250,250,250,0.4)" class="card-header">
       <?php echo $projet['nom_Projet']; ?></p>
     </div>
     <div class="card-block">
       <h4 class="card-title"><?php echo $projet['infos'];?></h4>
       <!-- <p class="card-text"><?php echo $projet['date_limite'];?></p> -->
       <a href="../vue/FormSubStepVue.php" class="btn btn-primary">Ajouter une sous-étape</a>
       <div class="container mt-5 mb-5">
<p>Tâche à réaliser</p>
         <div style="background-color:rgba(250,250,250,0.4)" class="col-lg-4 card text-center">
           <div style="background-color:rgba(250,250,250,0.4)" class="card-header">
             <?php echo $ShowsubStep['emplacement']; ?></p>
           </div>
           <div class="card-block">
             <h4 class="card-title"><?php echo $ShowsubStep['nb_piece'];?></h4>
             <!-- <p class="card-text"><?php echo $projet['date_limite'];?></p> -->
             <h5 class="card-title"><?php echo $ShowsubStep['domaine'];?></h5>
             <a href="../vue/FormSubStepVue.php" class="btn btn-primary">Ajouter une tâche</a>
           </div>
           <div style="background-color:rgba(250,250,250,0.4)" class="card-footer text-muted">

           </div>
         </div>

       </div>
     </div>
     <div style="background-color:rgba(250,250,250,0.4)" class="card-footer text-muted">
       <?php echo $projet['date_limite'];?>
     </div>
   </div>
</div>
