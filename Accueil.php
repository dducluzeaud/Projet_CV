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
              <form action="" method="Post">
              <input type="search" class="input-lg form-control" placeholder="Rechercher un CV" name="requete">
              <button type="submit" class="btn-lg btn-primary btn"><span class="glyphicon glyphicon-eye-open"></span> Rechercher</button>
              </form>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </section>

  <?php

  if (isset($_POST['requete']) && $_POST['requete'] != null) {
      include('connexion_BDD.php');

      $requete = htmlspecialchars($_POST['requete']);//La fonction extract puet t'aidér pour sa
    $req = $bdd->prepare("SELECT * FROM membres WHERE nom LIKE :requete ORDER BY id DESC"); // la requête, que vous devez maintenant comprendre
    $req->execute(array('requete' => $requete . '%'));


      $nb_resultats = $req->rowCount(); // on utilise la fonction mysql_num_rows pour compter les résultats pour vérifier par la suite
    if ($nb_resultats != 0) { // si le nombre de résultats est supérieur à 0, on continue

      ?>
      <h3>Résultats de votre recherche.</h3>
      <p>Nous avons trouvé <?php echo $nb_resultats;

      if ($nb_resultats > 1) {
          echo ' résultats';
      } else {
          echo ' résultat';
      } // on vérifie le nombre de résultats correctement.
      ?>
      dans notre base de données. <br/>
      <br/>
      <?php
      while ($donnees = $req->fetch()) { // on fait un while pour afficher la liste des fonctions trouvées, ainsi que l'id qui permettra de faire le lien vers la page de la fonction
        ?>
        <?php echo $donnees['nom'];echo " "; echo $donnees['prenom']; ?></a><br/>
        <?php

      } // fin de la boucle
      ?>

      <?php

    } // Fin d'affichage des résultats
    else {
        ?>
      <h3>Pas de résultats</h3>
      <p>Nous n'avons trouvé aucun résultat pour votre requête "<?php echo $_POST['requete']; ?>". Réessayez</a> avec autre chose.</p>
      <?php

    }// fin de l'affichage des erreurs
    $req->closeCursor(); // on ferme mysql
  }
  ?>

  <?php include("footer.php"); ?>

</body>
</html>
