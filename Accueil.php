<?php
session_start();

include('connexion_BDD.php');

include_once('cookieconnect.php');

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
        WHERE intitule_formation1 LIKE :requete
        or intitule_formation2 Like :requete
        or intitule_formation3 LIKE :requete
        or annee_formation1 LIKE :requete
        ORDER BY id DESC)");

        $req->execute(array('requete' => $requete . '%'));


        $nb_resultats = $req->rowCount();
        if ($nb_resultats != 0) { // si le nombre de résultats est supérieur à 0, on continue

          if ($nb_resultats < 2){ ?>
            <div class="container">
              <div class="col-lg-12">
                <p class='centrer'>Nous avons trouvé <?php echo $nb_resultats ?> étudiant pour <?php echo $requete?></p>
                <br>
              </div>
            </div>
            <?php  } else { ?>
              <div class="container">
                <div class="col-lg-12">
                  <p class="center">Nous avons trouvé <?php echo $nb_resultats ?> étudiants pour <?php echo $requete?></p>
                  <br>
                </div>
              </div>
              <?php  } ?>

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

                                <td><a href="mailto:<?php $donnees['mail']; ?>"><?php echo $donnees['mail']; ?></a>
                                </td>
                                <td><a href="CV.php" class="btn btn-primary btn-large btn-group"><span class="glyphicon glyphicon-picture"></span></a>
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
                <div class="container centrer">
                  <div class="col-lg-12">
                <h3>Pas de résultats</h3>
                <p>Nous n'avons trouvé aucun résultat pour votre requête "<?php echo $_POST['requete']; ?>". Réessayez</a> avec autre chose.
                    <br> Si vous cherchez l'année d'une promotion d'étudiants entrez une date sinon pour avoir accès à tous nos étudiants tapez CCI.</p>
              </div>
            </div>
                <?php

              }// fin de l'affichage des erreurs
              $req->closeCursor(); // on ferme mysql
            }

          ?>


          <?php include("footer.php"); ?>

        </body>
        </html>
