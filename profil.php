<?php
session_start();

include('connexion_BDD.php');


include_once('cookieconnect.php');

if (isset($_GET['id']) and $_GET['id'] > 0) {
  $getid = intval($_GET['id']);
  $requser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
  $requser->execute(array($getid));
  $userinfo = $requser->fetch(); ?>


  <html>
  <head>
    <title>Profil</title>
    <meta charset="utf-8">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
    <link rel="stylesheet" href="style.css"/>
  </head>
  <body>


    <div class="container-fluid">
      <a href="accueil.php"><img class=" col-md-2 hidden-sm hidden-xs" src="image/logoMaster.png" alt="logo"></a>
      <h1 class="col-md-8">Profil de <?php echo $userinfo['nom']; echo " ";echo $userinfo['prenom']; ?></h1>
    </div>

    <br>

<div class="error">
  <div class="form-group">
    <h3>Vos informations sont :</h3>
  </div>
  <div class="form-group">
        Nom = <?php echo $userinfo['nom']; ?>
    </div>


    <div class="form-group">
          Prénom = <?php echo $userinfo['prenom']; ?>
    </div>


    <div class="form-group">
      Mail = <?php echo $userinfo['mail']; ?>
    </div>
</div>




    <?php
    if (isset($_SESSION['id']) and $userinfo['id'] == $_SESSION['id']) {
      ?>
      <br />

      <div class="  error">

          <a href="accueil.php" class="btn btn-primary">Accueil <span class="glyphicon glyphicon-home"></span></a>
          <a href="editionprofil.php" class="btn btn-info">Editer mon profil <span class="glyphicon glyphicon-user"></span></a>
          <a href="formulaireCV.php" class="btn btn-primary">Créer son CV <span class="glyphicon glyphicon-file"></span></a>
          <a href="deconnexion.php" class="btn btn-danger">Déconnexion <span class="glyphicon glyphicon-off"></span></a>


      </div>

      <?php
        include ('footer.php');
    } ?>
  </div>
</body>
</html>
<?php

}
?>
