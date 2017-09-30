<?php
include("../template/header.php");
?>
<a href="../vue/FormulaireVue.php">Clique pour creer un projet</a>
<div class="container">
<div class="row">

<?php
foreach ($getinfo as $key => $select) {

?>
  <div  class="col-lg-4">
    <div style="background-color:rgba(250,250,250,0.4)" class="card">
      <div class="card-block">
        <h3 class="card-title"><?php echo $select['nom_Projet']; ?></h3>
        <p class="card-text"><?php echo $select['infos']; ?></p>
        <p class="card-text"><?php echo $select['date_limite']; ?></p>
        <a href="Projet.php?detail=<?php echo $select['id']; ?>" class="btn btn-primary">Détails</a>
      </div>
    </div>
  </div>

<!-- <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="..." alt="">
  <div class="card-block">
    <h4 class="card-title"></h4>
    <p class="card-text"></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?php echo $select['nom_Projet']; ?></li>
    <li class="list-group-item"><?php echo $select['infos']; ?></li>
    <li class="list-group-item"><?php echo $select['date_limite']; ?></li>
  </ul>
  <a href="Projet.php?detail=<?php echo $select['id']; ?>" class="btn btn-primary tonbou">Detail</a> -->
  <!-- <div class="card-block">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div> -->
<!-- </div> -->

<?php
}
 ?>
</div>
</div>
