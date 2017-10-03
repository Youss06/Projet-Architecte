<?php

require_once("dbsql.php");

function recup () {
global $bdd;
$req = $bdd-> prepare('SELECT * FROM Projet');
$req->execute();
$select = $req->fetchAll();
return $select;
}


function projet($nomProjet, $infos, $date ){
global $bdd;
  $req = $bdd->prepare('INSERT INTO Projet(nom_Projet, infos, date_limite)
  VALUES(:nom_Projet, :infos, :date_limite )');

  $req->execute(array(
    'nom_Projet'=>$nomProjet,
    'infos'=>$infos,
    'date_limite'=>$date
  ));
}

// fonction insert formulaire sous-etapes



function sendSubStep($emplacement, $nb_piece, $domaine ){
global $bdd;
  $req = $bdd->prepare('INSERT INTO subStep(emplacement, nb_piece, domaine)
  VALUES(:emplacement, :nb_piece, :domaine)');
  $req->execute(array(
    'emplacement'=>$emplacement,
    'nb_piece'=>$nb_piece,
    'domaine'=>$domaine
  ));



?>
