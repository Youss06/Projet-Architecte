<?php

include("../vue/template/header.php");

// $article = $_GET['id'];
 ?>



 <div class="container mt-5 mb-5">
      <div class="row">
        <div id="produit" class="col lg-6 md-6 xs-6" style="width: 15 rem;">
            <img class="card-img-top" src= alt="">
        </div>


        <div class="col lg-4 md-4 xs-4">

                  <h2 id="H2"><?php echo $produit['nom_Projet']; ?></h2><br/ >

                  <p><?php echo $produit['infos'];?></p>
                  <br>
            <p><?php echo $produit['date_limite'];?></p>



          </div>
              </div>
            </div>


<?php
}
 ?>
