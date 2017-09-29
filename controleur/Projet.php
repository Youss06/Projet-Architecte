<?php
require_once('../modele/ProjetData.php');

$showProjet = ProjectRecovery($_GET['detail']);

include('../vue/ProjetVue.php')



 ?>
