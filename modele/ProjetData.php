<?php

require_once("dbconnect/dbsql.php");

function ProjectRecovery($projetRecup){
global $bdd;
$req = $bdd-> prepare('SELECT * FROM Projet WHERE id = :id');
$req->execute(array(
'id'=>$projetRecup
));
$select = $req->fetchAll();
return $select;
}

?>
