<?php

require_once("dbconnect/dbsql.php");

function ProjectRecovery($projetRecup){
global $bdd;
$req = $bdd-> prepare('SELECT * FROM Projet WHERE id = :id');
$req->execute(array(
'id'=>$projetRecup
));
$select = $req->fetch();
return $select;
}

// require_once("dbconnect/dbsql.php");
//
// function subStep(){
//   global $bdd;
//   $req = $bdd-> prepare('SELECT * FROM subStep');
//   $req->execute();
//   $select = $req->fetchAll();
//   return $select;
// }


function sendSubStep($emplacement, $nb_piece, $domaine ){
global $bdd;
  $req = $bdd->prepare('INSERT INTO subStep(emplacement, nb_piece, domaine)
  VALUES(:emplacement, :nb_piece, :domaine)');
  $req->execute(array(
    'emplacement'=>$emplacement,
    'nb_piece'=>$nb_piece,
    'domaine'=>$domaine
  ));

  var_dump($emplacement);
}

 ?>
