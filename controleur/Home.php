<?php

require_once ("../modele/HomeData.php");

if (isset($_POST['send'])) {
 if (isset($_POST['nomProjet']) && isset($_POST['infos']) && isset($_POST['date'])){

      $nomProjet = $_POST['nomProjet'];
      $infos = $_POST['infos'];
      $date = $_POST['date'];

projet($nomProjet, $infos, $date);


// var_dump($_POST);

  }
}

$getinfo = recup();


include("../vue/HomeVue.php");
