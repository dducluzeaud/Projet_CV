<?php

session_start();

include('connexion_BDD.php')

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

  <?php include('header.php') ?>

  <div class="container">
    <br>

    <form class="col-lg-12" name="inscription" method="post" action="formulairesite.php">
      <legend>Informations :</legend>
      <div class="form-group">
        <label for="age">Age : </label>
        <input id="age" type="number" class="form-control">
      </div>
      <div class="form-group">
        <label for="text">Adresse : </label>
        <input id="adresse" type="text" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <label for="text">Numéro de fixe : </label>
        <input id="fixe" type="text" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <label for="text">Numéro de portable : </label>
        <input id="portable" type="text" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <label for="text">Sexe :</label>
        <select class="form-control" id="sexe">
          <option>M</option>
          <option>F</option>
        </select>
      </div>
      <div class="form-group col-lg-offset-5">
        <label class="radio-inline"><input type="radio" name="permis">Permis</label>
        <label class="radio-inline"><input type="radio" name="vehicule">Véhicule personnel</label>
      </div>
    </form>

    <form class="col-lg-12" name="inscription" method="post" action="formulairesite.php">
      <legend>Compétences :</legend>

      <p>Les compétences acquises au seins du master CCI seront misent par défaut dans le CV, veuillez rajoutez les autres langages acquis:</p>
      <br>
      <div class="form-group col-lg-offset-2">
        <label class="radio-inline"><input type="radio" name="ruby" value="Ruby"/>Ruby</label>
        <label class="radio-inline"><input type="radio" name="c" value="C"/>C</label>
        <label class="radio-inline"><input type="radio" name="cpp" value="Cpp"/>C++</label>
        <label class="radio-inline"><input type="radio" name="merise" value="Mersie"/>MERISE</label>
        <label class="radio-inline"><input type="radio" name="python" value="Python"/>Python</label>
        <label class="radio-inline"><input type="radio" name="objecivec" value="Objectivec"/>Objective C</label>
        <label class="radio-inline"><input type="radio" name="perl" value="Perl"/>Perl</label>
        <label class="radio-inline"><input type="radio" name="r" value="R"/>R</label>
        <label class="radio-inline"><input type="radio" name="pascal" value="Pacal"/>Pascal</label>
        <label class="radio-inline"><input type="radio" name="swift" value="swift"/>Swift</label>
      </div>
    </form>

    <form  class="col-lg-12">
      <div class="form-group">
        <label for="text">Langue vivante n°1 : </label>
        <input id="langue1" type="text" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <label for="text">Langue vivante n°2 : </label>
        <input id="langue2" type="text" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <label for="text">Langue vivante n°3 : </label>
        <input id="langue3" type="text" class="form-control"></textarea>
      </div>
    </form>

    <form class="col-lg-12" name="inscription" method="post" action="formulairesite.php">
      <legend>Formations n°1:</legend>
      <div class="form-group">
        <label for="text">Année d'optention du diplôme:  </label>
        <input id="annee_diplome1" type="number" class="form-control">
      </div>
      <div class="form-group">
        <label for="text">Intitulé de la formation : </label>
        <input id="intitulé_form1" type="text" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <label for="text">Université :</label>
        <input id="Université1" type="text" class="form-control"></textarea>
      </div>
      <label for="select">Mention : </label>
      <select id="Mention" class="form-control">
        <option></option>
        <option>Passable</option>
        <option>Assez-Bien</option>
        <option>Bien</option>
        <option>Trés Bien</option>
        <option>Excellent</option>
      </select>
      <br>
      <label for="textarea">Description de la formation: </label>
      <textarea id="textDescription_form1" type="textarea" class="form-control"></textarea>
      <br>
    </form>


    <form class="col-lg-12" name="inscription" method="post" action="formulairesite.php">
      <legend>Formations n°2:</legend>
      <div class="form-group">
        <label for="text">Année d'optention du diplôme:  </label>
        <input id="annee_diplome1" type="number" class="form-control">
      </div>
      <div class="form-group">
        <label for="text">Intitulé de la formation : </label>
        <input id="intitulé_form1" type="text" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <label for="text">Université :</label>
        <input id="Université1" type="text" class="form-control"></textarea>
      </div>
      <label for="select">Mention : </label>
      <select id="Mention" class="form-control">
        <option></option>
        <option>Passable</option>
        <option>Assez-Bien</option>
        <option>Bien</option>
        <option>Trés Bien</option>
        <option>Excellent</option>
      </select>
      <br>
      <label for="textarea">Description de la formation: </label>
      <textarea id="Description_form2" type="textarea" class="form-control"></textarea>
      <br>
    </form>


    <form class="col-lg-12" name="inscription" method="post" action="formulairesite.php">
      <legend>Formations n°3:</legend>
      <div class="form-group">
        <label for="text">Année d'optention du diplôme:  </label>
        <input id="annee_diplome1" type="number" class="form-control">
      </div>
      <div class="form-group">
        <label for="text">Intitulé de la formation : </label>
        <input id="intitulé_form1" type="text" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <label for="text">Université :</label>
        <input id="Université1" type="text" class="form-control"></textarea>
      </div>
      <label for="select">Mention : </label>
      <select id="Mention" class="form-control">
        <option></option>
        <option>Passable</option>
        <option>Assez-Bien</option>
        <option>Bien</option>
        <option>Trés Bien</option>
        <option>Excellent</option>
      </select>
      <br>
      <label for="textarea">Description de la formation: </label>
      <textarea id="Description_form3" type="textarea" class="form-control"></textarea>
      <br>
    </form>


    <form class="col-lg-12" name="inscription" method="post" action="formulairesite.php">
      <legend>Expérience Professionelles n°1</legend>
      <div class="form-group">
        <label for="text">Année du stage ou du travail:  </label>
        <input id="annee_xp1" type="number" class="form-control">
      </div>
      <label for="textarea">Description de votre expérience: </label>
      <textarea id="Description_xp1" type="textarea" class="form-control"></textarea>
    </form>

    <form class="col-lg-12" name="inscription" method="post" action="formulairesite.php">
      <legend>Expérience Professionelles n°2</legend>
      <div class="form-group">
        <label for="text">Année du stage ou du travail:  </label>
        <input id="annee_xp2" type="number" class="form-control">
      </div>
      <label for="textarea">Description de votre expérience: </label>
      <textarea id="Description_xp2" type="textarea" class="form-control"></textarea>
      <br>
    </form>

    <form class="col-lg-12" name="inscription" method="post" action="formulairesite.php">
      <legend>Expérience Professionelles n°3</legend>
      <div class="form-group">
        <label for="text">Année du stage ou du travail:  </label>
        <input id="annee_xp3" type="number" class="form-control">
      </div>
      <label for="textarea">Description de votre expérience: </label>
      <textarea id="Description_xp3" type="textarea" class="form-control"></textarea>
      <br>
    </form>

    <form class="col-lg-12" name="inscription" method="post" action="formulairesite.php">
      <legend>Vie associative</legend>
      <label for="textarea"></label>
      <textarea id="association" type="textarea" class="form-control"></textarea>
      <br>
    </form>

    <form class="col-lg-12" name="inscription" method="post" action="formulairesite.php">
      <legend>Divers</legend>
      <label for="textarea"></label>
      <textarea id="divers" type="textarea" class="form-control"></textarea>
      <br>
    </form>
  </div>

  <div class="container">
    <div class="col-lg-12">
      <a href="#" class="btn btn-block btn-danger">Enregistrez votre CV <span class="glyphicon glyphicon-hdd"></span></a>
    </div>
  </div>

  <?php
  if (isset($_POST['valider'])) {
    //On récupère les valeurs entrées par l'utilisateur :
    $email=$_POST['email'];
    $age=$_POST['age'];
    $sexe=$_POST['sexe'];
    //On construit la date d'aujourd'hui
    //strictement comme sql la construit
    $today = date("y-m-d");
    // pour la table competence
    $ruby=$_POST['ruby'];
    $c=$_POST['c'];
    $cpp=$_POST['cpp'];
    $merise=$_POST['merise'];
    $python=$_POST['python'];
    $objectivec=$_POST['objectivec'];
    $perl=$_POST['perl'];
    $r=$_POST['r'];
    $pascal=$_POST['pascal'];
    $swift=$_POST['swift'];

    //Appel de la fonction de connexion
    connectMaBase();

    //On prépare la commande sql d'insertion
    $sql1 = 'INSERT INTO etudiant VALUES("0","'.$email.'","'.$sexe.'","'.$age.'","'.$today.'")';
    $sql2 = 'INSERT INTO competence VALUES("'.$ruby.'","'.$c.'","'.$cpp.'","'.$merise.'","'.$python.'","'.$objectivec.'","'.$perl.'","'.$r.'","'.$pascal.'","'.$swift.'")';


    /*on lance la commande (mysql_query) et au cas où,
    on rédige un message d'erreur si la requête ne passe pas (or die)
    (Message qui intègrera les causes d'erreur sql)*/
    mysql_query($sql1) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());
    mysql_query($sql2) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());

    // fermeture de la connexion la connexion
    mysql_close();
  }
  ?>


</body>

</html>
