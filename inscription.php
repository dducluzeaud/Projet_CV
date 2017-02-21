<?php
try {
  $bdd = new PDO('mysql:host=localhost;dbname=espace_membre;charset=utf8', 'root', 'root');
} catch (Exception $e) {
  die('Erreur : '.$e->getMessage());
}

if (isset($_POST['forminscription'])) {
  $nom = htmlspecialchars($_POST['nom']);
  $prenom = htmlspecialchars($_POST['prenom']);
  $mail = htmlspecialchars($_POST['mail']);
  $mail2 = htmlspecialchars($_POST['mail2']);
  $mdp = sha1($_POST['mdp']);
  $mdp2 = sha1($_POST['mdp2']);

  if (!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['mail']) and !empty($_POST['mail2']) and !empty($_POST['mdp']) and !empty($_POST['mdp2'])) {
    $nomlength = strlen($nom);
    if ($nom <= 50) {
      $prenomlength = strlen($prenom);
      if ($prenom <= 50) {
        if ($mail == $mail2) {
          if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $reqmail = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
            $reqmail->execute(array($mail));
            $mailexist = $reqmail->rowCount();
            if ($mailexist == 0) {
              if ($mdp == $mdp2) {
                $insertmbr = $bdd->prepare("INSERT INTO membres(nom, prenom, mail, motdepasse) VALUES(?, ?, ?, ?)");
                $insertmbr->execute(array($nom, $prenom, $mail, $mdp));

                $erreur = "Votre compte a bien été créé ! <a href=\"profil.php\">Me connecter</a>";
              } else {
                $erreur = "Vos mots de passes ne correspondent pas !";
              }
            } else {
              $erreur = "Adresse mail déjà utilisée !";
            }
          } else {
            $erreur = "Votre adresse mail n'est pas valide !";
          }
        } else {
          $erreur = "Vos adresses mail ne correspondent pas !";
        }
      } else {
        $erreur = "Votre prénom ne doit pas dépasser 50 caractères !";
      }
    } else {
      $erreur = "Votre nom ne doit pas dépasser 50 caractères !";
    }
  } else {
    $erreur = "Tous les champs doivent être complétés !";
  }
}

?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Inscription</title>
  <link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
  <link rel="stylesheet" href="style.css"/>
</head>
<body>

</body>
</html>


<div class="container-fluid">
  <a href="accueil.php"><img class=" col-md-2 hidden-sm hidden-xs" src="image/logoMaster.png" alt="logo"></a>
  <h1 class="col-md-8">Inscription</h1>
</div>

<br>
<br>

<div class="container">

  <form method="POST">
    <div class="form-group">
      <label for="nom">Nom :</label>
      <input class="form-control" type="text" placeholder="Votre nom" id="nom" name="nom" value="<?php if (isset($nom)) {
        echo $nom;
      } ?>" />
    </div>

    <div class="form-group">
      <label for="prenom">Prénom :</label>
      <input class="form-control" type="text" placeholder="Votre prénom" id="prenom" name="prenom" value="<?php if (isset($prenom)) {
        echo $prenom;
      } ?>" />
    </div>

    <div class="form-group">
      <label for="mail">Mail :</label>
      <input class="form-control" type="email" placeholder="Votre mail" id="mail" name="mail" value="<?php if (isset($mail)) {
        echo $mail;
      } ?>" />
    </div>

    <div class="form-group">
      <label for="mail2">Confirmation du mail :</label>
      <input class="form-control" type="email" placeholder="Confirmez votre mail" id="mail2" name="mail2" value="<?php if (isset($mail2)) {
        echo $mail2;
      } ?>" />
    </div>

    <div class="form-group">
      <label for="mdp">Mot de passe :</label>
      <input class="form-control" type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" />
    </div>

    <div class="form-group">
      <label for="mdp2">Confirmation du mot de passe :</label>
      <input class="form-control" type="password" placeholder="Confirmez votre mdp" id="mdp2" name="mdp2" />
    </div>

    <div class="form-group">
      <input class="form-control btn btn-primary" type="submit" name="forminscription" value="Je m'inscris" />
    </div>
  </tr>
</table>
</form>
</br>
<div class="align-text:center error">
  <?php
  if (isset($erreur)) {
    echo '<font color="red">'.$erreur."</font>";
  }
  ?>
</div>

</div>


</div>
</body>
