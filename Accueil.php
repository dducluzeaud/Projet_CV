<?php
session_start();
?>



<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <title>Accueil CV</title>
  <link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
  <link rel="stylesheet" href="style.css"/>

</head>

<body>

  <?php include("header.php");?>

  <br><br>
  <section class="recherche">
    <div class="container">
      <div class="row">
        <div class="col-xs-offset-2">
          <nav class="navbar-form navbar-collapse">
            <div class="form-group">
              <input type="search" class="input-lg form-control" placeholder="Rechercher un CV">
              <button type="submit" class="btn-lg btn-primary btn"><span class="glyphicon glyphicon-eye-open"></span> Rechercher</button>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </section>

  <?php include("footer.php"); ?>

</body>
</html>
