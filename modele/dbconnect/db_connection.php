<?php

include("dbsql.php");

function recup () {

$req = $bdd-> query(SELECT * FROM Projet)

return req;
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
