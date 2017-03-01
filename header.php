<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
  <link rel="stylesheet" href="style.css"/>
</head>

<body>

  <header class="container-fluid centrer">
    <a href="accueil.php"><img class=" col-md-2 hidden-sm hidden-xs" src="image/logoMaster.png" alt="logo"></a>
    <h1 class="col-md-8">Curriculum Vitae</h1>

    <div class="btn-group">
      <br>
      <?php if (isset($_SESSION['ID_etu'])) {
        ?>

        <div class="btn-group col-md-2">
          <button  type="button" class="btn-rond btn-primary dropdown-toggle" data-toggle="dropdown"> Mon compte<span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="profil.php?ID_etu=<?php echo $_SESSION['ID_etu'];?>"><span class="glyphicon glyphicon-user"></span> Voir votre profil</a></li>
            <?php if(!empty($donnees['age'])) {
              echo '<li><a href="#"><span class="glyphicon glyphicon-picture"></span> Modifier votre CV</a></li>';
            } else {
             echo'<li><a href="formulaireCV.php"><span class="glyphicon glyphicon-file"></span> Créer son CV </a></li>';
           }?>
            <li><a href="deconnexion.php"><span class="glyphicon glyphicon-off"></span> Déconnexion</a></li>
          </ul>
        </div>
        <?php

      } else {
        ?>
        <div class="btn-group btn-justify">

          <a href="inscription.php "type="submit" class="btn btn-default">Inscription</a>

          <a href="connexion.php "type="submit" class="btn btn-primary">Connexion</a>

        </div>



        <?php } ?>

        <script src="bootstrap/js/jquery.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script type="bootstrap/js/jquery.js"></script>

        <script>
        $("#connexion").click(function{
          window.Location('connexion.php');
        });
      });
      </script>
    </header>

  </body>

  </html>
