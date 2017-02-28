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

    $requete = htmlspecialchars($_POST['requete']);
    $req = $bdd->prepare("SELECT nom, prenom, mail
      FROM etudiant
      WHERE ID_etu IN (SELECT ID_etu
        FROM formations
        WHERE intitule_form1 LIKE :requete
        or intitule_form2 Like :requete
        or intitule_form3 LIKE :requete
        ORDER BY id DESC)");

        $req->execute(array('requete' => $requete . '%'));


        $nb_resultats = $req->rowCount();
        if ($nb_resultats != 0) { // si le nombre de résultats est supérieur à 0, on continue
          ?>

          <p class='error'>Nous avons trouvé <?php echo $nb_resultats ?> étudiants pour <?php echo $requete?></p>
          <br>

          <div class="container">


            <div class="form-group">
              <div class="col-md-offset-3">
                <div class="row">
                  <div class="col-md-9">
                    <table class="table table table-striped">
                      <thead class="form-group">
                        <tr>
                          <th>Nom</th>
                          <th>Prénom</th>
                          <th>Email</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        while ($donnees = $req->fetch()) { // on fait un while pour afficher la liste des fonctions trouvées, ainsi que l'id qui permettra de faire le lien vers la page de la fonction
                          ?>
                          <tr>
                            <td><?php echo $donnees['nom']; ?></td>
                            <td><?php  echo $donnees['prenom']; ?></td>

                            <td><?php echo $donnees['mail'];?></td>
                            <td><a href="#" class="btn btn-primary btn-large btn-group"><span class="glyphicon glyphicon-picture"></span></a>
                            <a href="#" class="btn btn-success btn-large btn-group"><span class="glyphicon glyphicon-save"></span> </a></td>

                          </tr>
                          <?php

                        } // fin de la boucle
                        ?>

                      </tbody>
                    </table>
                  </div>
                </div>

              </div>
            </div>
          </div>
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
