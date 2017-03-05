<?php
session_start();

include('connexion_BDD.php');

include_once('cookieconnect.php');

if (isset($_GET['ID_etu']) and $_GET['ID_etu'] > 0) {
  $getid = intval($_GET['ID_etu']);
  $requser = $bdd->prepare('SELECT * FROM etudiant WHERE ID_etu = ?');
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

    <?php
    if (isset($_SESSION['ID_etu']) and $userinfo['ID_etu'] == $_SESSION['ID_etu']) {
      $requser = $bdd->prepare("SELECT * FROM formations WHERE ID_etu = ?");
      $requser->execute(array($_SESSION['ID_etu']));
      $donnees = $requser->fetch();
      ?>
      <br />
      <br><br><br><br>
      <div class="container">


        <div class=" btn-group-vertical col-lg-4 col-lg-offset-4 centrer">

          <a href="accueil.php" class="btn btn-primary btn-lg">Accueil <span class="glyphicon glyphicon-home"></span></a>
          <a href="editionprofil.php" class="btn btn-info btn-lg">Editer mon profil <span class="glyphicon glyphicon-user"></span></a>
          <?php if (isset($donnees['intitule_formation1']) and !empty($donnees['intitule_formation1'])){
            echo '<a href="edition_CV_form.php" class="btn btn-primary btn-lg">Modifier votre CV <span class="glyphicon glyphicon-file"></span></a>';

          } else {
            echo '<a href="formulaireCV.php" class="btn btn-primary btn-lg">Créer son CV <span class="glyphicon glyphicon-file"></span></a>';

          } ?>


          <a href="CV.php" class="btn btn-success btn-lg">Visualiser CV <span class="glyphicon glyphicon-eye-open"></span></a>
          <a href="deconnexion.php" class="btn btn-danger btn-lg">Déconnexion <span class="glyphicon glyphicon-off"></span></a>

        </div>
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
