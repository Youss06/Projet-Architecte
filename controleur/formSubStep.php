<?php

require_once ("../modele/ProjetData.php");

if (isset($_POST['send'])) {
 if (isset($_POST['emplacement']) && isset($_POST['nb_piece']) && isset($_POST['domaine'])){

      $emplacement = $_POST['emplacement'];
      $nb_piece = $_POST['nb_piece'];
      $domaine = $_POST['domaine'];
// var_dump($emplacement);
// var_dump($nb_piece);
// var_dump($domaine);
sendSubStep($emplacement, $nb_piece, $domaine);

  }
}

// $getinfo = sendSubStep($emplacement, $nb_piece, $domaine );
// var_dump($getinfo);
header('Location:Projet.php');

include("../vue/FormSubStepVue.php");
