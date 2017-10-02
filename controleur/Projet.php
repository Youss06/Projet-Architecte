<?php

//1 model et connexion
require_once('../modele/ProjetData.php');


//2 traitement
$projet = ProjectRecovery($_GET['detail']);


// $projectDelete = deleteProject($_GET['delete']);
 include('../vue/ProjetVue.php');

 // if (isset($_POST['send'])) {
 //  if (isset($_POST['emplacement']) && isset($_POST['nb_piece']) && isset($_POST['domaine'])){
 //
 //       $emplacement = $_POST['emplacement'];
 //       $nb_piece = $_POST['nb_piece'];
 //       $domaine = $_POST['domaine'];
 //
 // showSubStep($emplacement, $nb_piece, $domaine);
 //
 //
 // var_dump($_POST);
 //
 //   }
 // }
 //
 // $getinfo = subStep();
 //
 //
 // include("../vue/projet.php");
