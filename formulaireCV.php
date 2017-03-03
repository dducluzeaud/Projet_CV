<?php
session_start();

include('connexion_BDD.php');

include_once('cookieconnect.php');

if(isset($_SESSION['ID_etu']))
{
  $requser = $bdd->prepare("SELECT * FROM etudiant WHERE ID_etu = ?");
  $requser->execute(array($_SESSION['ID_etu']));
  $user = $requser->fetch();
  ?>

  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
    <link rel="stylesheet" href="style.css"/>
    <title>Créer votre CV</title>
  </head>
  <body>

    <?php include('header.php');

    include ('isset.php');
    ?>

    <div class="container">
      <br>

      <form method="POST">
        <legend>Informations :</legend>
        <div class="form-group">
          <label for="age">Age : </label>
          <input id="age" type="number" value="25" min="0" max="100" name="age" class="form-control">
        </div>
        <div class="form-group">
          <label for="text">Adresse : </label>
          <input id="adresse" type="text" name="adresse" class="form-control" value="<?php if (isset($adresse)) {echo $adresse;} ?>" /></textarea>
        </div>
        <div class="form-group">
          <label for="text">Numéro de fixe : </label>
          <input id="fixe" name="fixe" type="text" class="form-control" value="<?php if (isset($fixe)) {echo $fixe;} ?>"></textarea>
        </div>
        <div class="form-group">
          <label for="text">Numéro de portable : </label>
          <input id="portable" name="portable" type="text" class="form-control" value="<?php if (isset($portable)) {echo $portable;} ?>"></textarea>
        </div>

        <legend>Compétences :</legend>

        <p>Les compétences acquises au seins du master CCI seront misent par défaut dans le CV, veuillez rajoutez les autres langages acquis:</p>
        <br>

        <div class="form-group">
          <label for="text">Langue vivante n°1 : </label>
          <input id="langue1" name="langue1" type="text" class="form-control" value="<?php if (isset($langue1)) {echo $langue1;} ?>"></textarea>
        </div>
        <div class="form-group">
          <label for="text">Langue vivante n°2 : </label>
          <input id="langue2"name="langue2" type="text" class="form-control"value="<?php if (isset($langue2)) {echo $langue2;} ?>"></textarea>
        </div>
        <div class="form-group">
          <label for="text">Langue vivante n°3 : </label>
          <input id="langue3"name="langue3" type="text" class="form-control"value="<?php if (isset($langue3)) {echo $langue3;} ?>"></textarea>
        </div>

        <legend>Formations n°1:</legend>
        <div class="form-group">
          <label for="text">Année d'optention du diplôme:  </label>
          <input id="annee_diplome1" name="annee_diplome1" type="number" class="form-control" min="1900" max=" <?php echo date('Y')?> " value="<?php if (isset($annee_diplome1)) {echo $annee_diplome1;} ?>">
        </div>
        <div class="form-group">
          <label for="text">Intitulé de la formation : </label>
          <input id="intitule_form1" name="intitule_formation1" type="text" class="form-control" value="<?php if (isset($intitule_formation1)) {echo $intitule_formation1;} ?>"></textarea>
        </div>
        <div class="form-group">
          <label for="text">Université :</label>
          <input id="universite1" name="universite1" type="text" class="form-control" value="<?php if (isset($universite1)) {echo $universite1;} ?>"></textarea>
        </div>
        <label for="select">Mention : </label>
        <select id="mention1" name="mention1" class="form-control"value="<?php if (isset($mention1)) {echo $mention1;} ?>">
          <option></option>
          <option>Passable</option>
          <option>Assez-Bien</option>
          <option>Bien</option>
          <option>Trés Bien</option>
          <option>Excellent</option>
        </select>
        <br>
        <label for="textarea">Description de la formation: </label>
        <textarea id="description_form1" name="description_form1" type="textarea" class="form-control" ></textarea>
        <br>

        <legend>Formations n°2:</legend>
        <div class="form-group">
          <label for="text">Année d'optention du diplôme:  </label>
          <input id="annee_diplome2" name="annee_diplome2" type="number" class="form-control" min="1900" max=" <?php echo date('Y')?> " value="<?php if (isset($annee_diplome2)) {echo $annee_diplome2;} ?>">
        </div>
        <div class="form-group">
          <label for="text">Intitulé de la formation : </label>
          <input id="intitule_form2" name="intitule_formation2" type="text" class="form-control" value="<?php if (isset($intitule_formation2)) {echo $intitule_formation2;} ?>"></textarea>
        </div>
        <div class="form-group">
          <label for="text">Université :</label>
          <input id="universite2" name="universite2" type="text" class="form-control" value="<?php if (isset($universite2)) {echo $universite2;} ?>"></textarea>
        </div>
        <label for="select">Mention : </label>
        <select id="mention2" name="mention2" class="form-control" value="<?php if (isset($mention2)) {echo $mention2;} ?>">
          <option></option>
          <option>Passable</option>
          <option>Assez-Bien</option>
          <option>Bien</option>
          <option>Trés Bien</option>
          <option>Excellent</option>
        </select>
        <br>
        <label for="textarea">Description de la formation: </label>
        <textarea id="description_form2" name="description_form2" type="textarea" class="form-control" ></textarea>
        <br>

        <legend>Formations n°3:</legend>
        <div class="form-group">
          <label for="text">Année d'optention du diplôme:  </label>
          <input id="annee_diplome3" name="annee_diplome3" type="number" min="1900" max=" <?php echo date('Y')?> " class="form-control" value="<?php if (isset($annee_diplome3)) {echo $annee_diplome3;} ?>">
        </div>
        <div class="form-group">
          <label for="text">Intitulé de la formation : </label>
          <input id="intitule_form3" name="intitule_formation3" type="text" class="form-control" value="<?php if (isset($intitule_formation3)) {echo $intitule_formation3;} ?>"></textarea>
        </div>
        <div class="form-group">
          <label for="text">Université :</label>
          <input id="universite3" name="universite3" type="text" class="form-control"value="<?php if (isset($universite3)) {echo $universite3;} ?>"></textarea>
        </div>
        <label for="select">Mention : </label>
        <select id="mention3" name="mention3" class="form-control" value="<?php if (isset($mention3)) {echo $mention3;} ?>">
          <option></option>
          <option>Passable</option>
          <option>Assez-Bien</option>
          <option>Bien</option>
          <option>Trés Bien</option>
          <option>Excellent</option>
        </select>
        <br>
        <label for="textarea">Description de la formation: </label>
        <textarea id="description_form3" name="description_form3" type="textarea" class="form-control" ></textarea>
        <br>

        <legend>Expérience Professionelles n°1</legend>
        <div class="form-group">
          <label for="text">Année du stage ou du travail:  </label>
          <input id="annee_xp1" name="annee_xp1" type="text" class="form-control" value="<?php if (isset($annee_xp1)) {echo $annee_xp1;} ?>">
        </div>
        <label for="textarea">Description de votre expérience: </label>
        <textarea id="description_xp1" name="description_xp1" type="textarea" class="form-control" ></textarea>

        <legend>Expérience Professionelles n°2</legend>
        <div class="form-group">
          <label for="text">Année du stage ou du travail:  </label>
          <input id="annee_xp2" name="annee_xp2" type="text" class="form-control">
        </div>
        <label for="textarea">Description de votre expérience: </label>
        <textarea id="description_xp2" name="description_xp2" type="textarea" class="form-control" ></textarea>
        <br>

        <legend>Expérience Professionelles n°3</legend>
        <div class="form-group">
          <label for="text">Année du stage ou du travail:  </label>
          <input id="annee_xp3" name="annee_xp3" type="text" class="form-control" value="<?php if (isset($annee_xp3)) {echo $annee_xp3;} ?>">
        </div>
        <label for="textarea">Description de votre expérience: </label>
        <textarea id="description_xp3" name="description_xp3" type="textarea" class="form-control" ></textarea>
        <br>

        <legend>Vie associative</legend>
        <label for="textarea"></label>
        <textarea id="association" name="association" type="textarea" class="form-control" ></textarea>
        <br>

        <legend>Divers</legend>
        <label for="textarea"></label>
        <textarea id="divers" name="divers" type="textarea" class="form-control"value="<?php if (isset($divers)) {echo $divers;} ?>"></textarea>
        <br>

      </div>
    </div>

    <div class="container">
      <div class="form-group col-md-6 col-md-offset-3">
        <input class="form-control btn btn-danger" type="submit" name="valider" value="Je créer mon CV"/>
      </div>
    </div>
  </form>

  <div class=" centrer">
    <?php
    if (isset($erreur)) {
      echo '<font color="red">'.$erreur."</font>";
    }
  }
  ?>
</div>

<br>
</body>
</html>
