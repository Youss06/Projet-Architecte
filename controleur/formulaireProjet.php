<?php

require_once ("../modele/dbconnect/db_connection.php");

if (isset($_POST['send'])) {
 if (isset($_POST['nomProjet']) && isset($_POST['infos']) && isset($_POST['date'])){

      $nomProjet = $_POST['nomProjet'];
      $infos = $_POST['infos'];
      $date = $_POST['date'];

projet($nomProjet, $infos, $date);


var_dump($_POST);

  }
}

include("../vue/FormulaireVue.php");
