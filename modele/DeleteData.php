<?php
require_once("dbconnect/dbsql.php");

function deleteProject($delete){
  global $bdd;
$reponse = $bdd->prepare('DELETE FROM Projet WHERE id = ?');
  $reponse->execute(array(
'id'=>$delete
 ));
   $donnees = $reponse->fetchAll();
return $donnees;
}
 ?>
