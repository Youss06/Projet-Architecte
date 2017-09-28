<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="icon" href="favicon.png">
    <link rel = "stylesheet" href = "font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>Formulaire</title>
  </head>
  <body>
    <?php
    include("../template/header.php")


    ?>

    <form class="" action="../modele/dbconnect/db_connect.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="exampleInputEmail1">Nom du projet</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nom Projet">
        <small id="emailHelp" class="form-text text-muted">Le nom que votre projet devra porter</small>
      </div>



      <div class="form-group">
        <label for="exampleTextarea">Description du projet</label>
        <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label for="exampleInputFile">Insérer fichier</label>
        <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
      </div>

      <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>


  </body>
</html>
