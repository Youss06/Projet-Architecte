<?php

require_once("dbconnect/dbsql.php");

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



?>
