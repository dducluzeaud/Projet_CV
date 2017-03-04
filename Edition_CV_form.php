<?php session_start();

  include('connexion_BDD.php');

  include_once('cookieconnect.php');

  include('edition_CV.php');

  if(isset($_SESSION['ID_etu']))
  {

  ?>

<html>
<head>
  <title>Edition du profil</title>
  <meta charset="utf-8">

</head>
<body>

  <?php  include('header.php');  ?>

  <br>

  <form method="POST" action="" enctype="multipart/form-data">

    <div class="container">
      <br>

      <legend>Informations :</legend>
      <div class="form-group">
        <label for="text">Age : </label>
        <input id="newAge" type="text" name="newAge" class="form-control" value="<?php if (isset($age)) {echo $age;} ?>">
      </div>
      <div class="form-group">
        <label for="text">Adresse : </label>
        <input id="newAdresse" type="text" name="newAdresse" class="form-control" value="<?php if (isset($adresse)) {echo $adresse;} ?>" />
      </div>
      <div class="form-group">
        <label for="text">Numéro de fixe : </label>
        <input id="newFixe" name="newFixe" type="text" class="form-control" value="<?php if (isset($fixe)) {echo $fixe;} ?>">
      </div>
      <div class="form-group">
        <label for="text">Numéro de portable : </label>
        <input id="newPortable" name="newPortable" type="text" class="form-control" value="<?php if (isset($portable)) {echo $portable;} ?>">
      </div>

      <legend>Compétences :</legend>

      <p>Les compétences acquises au seins du master CCI seront misent par défaut dans le CV, veuillez rajoutez les autres langages acquis:</p>
      <br>

      <div class="form-group">
        <label for="text">Langue vivante n°1 : </label>
        <input id="newLangues1" name="newLangues1" type="text" class="form-control" value="<?php if (isset($langue1)) {echo $langue1;} ?>">
      </div>
      <div class="form-group">
        <label for="text">Langue vivante n°2 : </label>
        <input id="newLangues2"name="newLangues2" type="text" class="form-control"value="<?php if (isset($langue2)) {echo $langue2;} ?>">
      </div>
      <div class="form-group">
        <label for="text">Langue vivante n°3 : </label>
        <input id="newLangues3"name="newLangues3" type="text" class="form-control"value="<?php if (isset($langue3)) {echo $langue3;} ?>">
      </div>

      <legend>Formations n°1:</legend>
      <div class="form-group">
        <label for="text">Année d'optention du diplôme:  </label>
        <input id="newAnneDiplome1" name="newAnneDiplome1" type="number" class="form-control" min="1900" max=" <?php echo date('Y')?> " value="<?php if (isset($annee_diplome1)) {echo $annee_diplome1;} ?>">
      </div>
      <div class="form-group">
        <label for="text">Intitulé de la formation : </label>
        <input id="newIntituleFom1" name="newIntituleFom1" type="text" class="form-control" value="<?php if (isset($intitule_formation1)) {echo $intitule_formation1;} ?>"></textarea>
      </div>
      <div class="form-group">
        <label for="text">Université :</label>
        <input id="newUniversite1" name="newUniversite1" type="text" class="form-control" value="<?php if (isset($universite1)) {echo $universite1;} ?>"></textarea>
      </div>
      <label for="select">Mention : </label>
      <select id="newMention1" name="newMention1" class="form-control"value="<?php if (isset($mention1)) {echo $mention1;} ?>">
        <option></option>
        <option>Passable</option>
        <option>Assez-Bien</option>
        <option>Bien</option>
        <option>Trés Bien</option>
        <option>Excellent</option>
      </select>
      <br>
      <label for="textarea">Description de la formation: </label>
      <textarea id="newDescription_form1" name="newDescription_form1" type="textarea" class="form-control" ></textarea>
      <br>

      <legend>Formations n°2:</legend>
      <div class="form-group">
        <label for="text">Année d'optention du diplôme:  </label>
        <input id="newAnneDiplome2" name="newAnneDiplome2" type="number" class="form-control" min="1900" max=" <?php echo date('Y')?> " value="<?php if (isset($annee_diplome2)) {echo $annee_diplome2;} ?>">
      </div>
      <div class="form-group">
        <label for="text">Intitulé de la formation : </label>
        <input id="newIntituleFom2" name="newIntituleFom2" type="text" class="form-control" value="<?php if (isset($intitule_formation2)) {echo $intitule_formation2;} ?>"></textarea>
      </div>
      <div class="form-group">
        <label for="text">Université :</label>
        <input id="newUniversite2" name="newUniversite2" type="text" class="form-control" value="<?php if (isset($universite2)) {echo $universite2;} ?>"></textarea>
      </div>
      <label for="select">Mention : </label>
      <select id="newMention2" name="newMention2" class="form-control" value="<?php if (isset($mention2)) {echo $mention2;} ?>">
        <option></option>
        <option>Passable</option>
        <option>Assez-Bien</option>
        <option>Bien</option>
        <option>Trés Bien</option>
        <option>Excellent</option>
      </select>
      <br>
      <label for="textarea">Description de la formation: </label>
      <textarea id="newDescription_form2" name="newDescription_form2" type="textarea" class="form-control" ></textarea>
      <br>

      <legend>Formations n°3:</legend>
      <div class="form-group">
        <label for="text">Année d'optention du diplôme:  </label>
        <input id="newAnneDiplome3" name="newAnneDiplome3" type="text" class="form-control" value="<?php if (isset($annee_diplome3)) {echo $annee_diplome3;} ?>">
      </div>
      <div class="form-group">
        <label for="text">Intitulé de la formation : </label>
        <input id="newIntituleFom3" name="newIntituleFom3" type="text" class="form-control" value="<?php if (isset($intitule_formation3)) {echo $intitule_formation3;} ?>"></textarea>
      </div>
      <div class="form-group">
        <label for="text">Université :</label>
        <input id="newUniversite3" name="newUniversite3" type="text" class="form-control"value="<?php if (isset($universite3)) {echo $universite3;} ?>"></textarea>
      </div>
      <label for="select">Mention : </label>
      <select id="newMention3" name="newMention3" class="form-control" value="<?php if (isset($mention3)) {echo $mention3;} ?>">
        <option></option>
        <option>Passable</option>
        <option>Assez-Bien</option>
        <option>Bien</option>
        <option>Trés Bien</option>
        <option>Excellent</option>
      </select>
      <br>
      <label for="textarea">Description de la formation: </label>
      <textarea id="newDescription_form3" name="newDescription_form3" type="textarea" class="form-control" ></textarea>
      <br>

      <legend>Expérience Professionelles n°1</legend>
      <div class="form-group">
        <label for="text">Année du stage ou du travail:  </label>
        <input id="newAnnee_xp1" name="newAnnee_xp1" type="text" class="form-control" value="<?php if (isset($annee_xp1)) {echo $annee_xp1;} ?>">
      </div>
      <label for="textarea">Description de votre expérience: </label>
      <textarea id="newDescrition_xp1" name="newDescrition_xp1" type="textarea" class="form-control" ></textarea>

      <legend>Expérience Professionelles n°2</legend>
      <div class="form-group">
        <label for="text">Année du stage ou du travail:  </label>
        <input id="newAnnee_xp2" name="newAnnee_xp2" type="text" class="form-control">
      </div>
      <label for="textarea">Description de votre expérience: </label>
      <textarea id="newDescrition_xp2" name="newDescrition_xp2" type="textarea" class="form-control" ></textarea>
      <br>

      <legend>Expérience Professionelles n°3</legend>
      <div class="form-group">
        <label for="text">Année du stage ou du travail:  </label>
        <input id="newAnnee_xp3" name="newAnnee_xp3" type="text" class="form-control" value="<?php if (isset($annee_xp3)) {echo $annee_xp3;} ?>">
      </div>
      <label for="textarea">Description de votre expérience: </label>
      <textarea id="newDescrition_xp3" name="newDescrition_xp3" type="textarea" class="form-control" ></textarea>
      <br>

      <legend>Vie associative</legend>
      <label for="textarea"></label>
      <textarea id="newAssociation" name="newAssociation" type="textarea" class="form-control" ></textarea>
      <br>

      <legend>Divers</legend>
      <label for="textarea"></label>
      <textarea id="newDivers" name="newDivers" type="textarea" class="form-control"value="<?php if (isset($divers)) {echo $divers;} ?>"></textarea>
      <br>

    </div>
  </div>

  <div class="container">
    <div class="form-group col-md-6 col-md-offset-3">
      <input class="form-control btn btn-danger" type="submit" name="valider" value="Je modifie mon CV"/>
    </div>
  </div>



</form>
<div class="centrer">
  <?php if(isset($msg)) { echo $msg; }

?>
</div>
</div>
</div>
</div>
</body>
</head>
</html>
<?php
}
?>
