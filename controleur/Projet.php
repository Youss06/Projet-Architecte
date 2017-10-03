<?php

//1 model et connexion
require_once('../modele/ProjetData.php');


//2 traitement et verif
// if (isset($_GET['detail'])  +  empty['detail']) {
//
// }
$projet = ProjectRecovery($_GET['detail']);

$ShowsubStep = subStep($_GET['detail']);

$reponse = $bdd ->prepare ('SELECT Projet.id, subStep.id
FROM Projet, subStep
WHERE Projet.id = subStep.id');

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
