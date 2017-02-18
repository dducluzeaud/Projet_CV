<?php
session_start
?>



<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <title>Accueil CV</title>
  <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

  <style type=text/css>
  .recherche{
    text-align: center;
    width: auto;
  }

  body {
    margin-left: : 100px;
    font-family: 'Bitter', serif;
    background-color: #fff;
    color: #259;
  }
  </style>
</head>
<body>

  <?php include("header.php");?>


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









</div>






</body>
</html>
