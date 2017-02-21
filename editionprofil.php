<?php
session_start();

try
{
  $bdd = new PDO('mysql:host=localhost;dbname=espace_membre;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}

include_once('cookieconnect.php');

if(isset($_SESSION['id']))
{
  $requser = $bdd->prepare("SELECT * FROM membres WHERE id = ?");
  $requser->execute(array($_SESSION['id']));
  $user = $requser->fetch();

  if(isset($_POST['newNom']) AND !empty($_POST['newNom']) AND $_POST['newNom'] != $user['nom'])
  {
    $newNom = htmlspecialchars($_POST['newNom']);
    $insertNom = $bdd->prepare("UPDATE membres SET nom = ? WHERE id = ?");
    $insertNom->execute(array($newNom, $_SESSION['id']));
    header('Location: profil.php?id='.$_SESSION['id']);
  }
  if(isset($_POST['newPrenom']) AND !empty($_POST['newPrenom']) AND $_POST['newPrenom'] != $user['prenom'])
  {
    $newPrenom = htmlspecialchars($_POST['newPrenom']);
    $insertPrenom = $bdd->prepare("UPDATE membres SET prenom = ? WHERE id = ?");
    $insertPrenom->execute(array($newPrenom, $_SESSION['id']));
    header('Location: profil.php?id='.$_SESSION['id']);
  }

  if(isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $user['mail'])
  {
    $newmail = htmlspecialchars($_POST['newmail']);
    $insertmail = $bdd->prepare("UPDATE membres SET mail = ? WHERE id = ?");
    $insertmail->execute(array($newmail, $_SESSION['id']));
    header('Location: profil.php?id='.$_SESSION['id']);
  }

  if(isset($_POST['newmdp1']) AND !empty($_POST['newmdp1']) AND isset($_POST['newmdp2']) AND !empty($_POST['newmdp2']))
  {
    $mdp1 = sha1($_POST['newmdp1']);
    $mdp2 = sha1($_POST['newmdp2']);

    if($mdp1 == $mdp2)
    {
      $insertmdp = $bdd->prepare("UPDATE membres SET motdepasse = ? WHERE id = ?");
      $insertmdp->execute(array($mdp1, $_SESSION['id']));
      header('Location: profil.php?id='.$_SESSION['id']);
    }
    else
    {
      $msg = "Vos deux mdp ne correspondent pas !";

    }
  }

  ?>
  <html>
  <head>
    <title>Edition du profil</title>
    <meta charset="utf-8">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
    <link rel="stylesheet" href="style.css"/>
  </head>
  <body>

    <div class="container-fluid">
      <a href="accueil.php"><img class=" col-md-2 pull-left hidden-xs" src="image/logoMaster.png" alt="logo"></a>
      <h1> Edition de mon profil </h1>
    </div>
    <br><br>


    <form method="POST" action="" enctype="multipart/form-data">

      <div class="container">


        <div class="form-group">
          <label>Nom :</label>
          <input class="form-control" type="text" name="newNom" placeholder="nom" value="<?php echo $user['nom']; ?>" /><br /><br />
        </div>

        <div class="form-group">

        </div>
        <label>Prenom :</label>
        <input class="form-control" type="text" name="newPrenom" placeholder="prenom" value="<?php echo $user['prenom']; ?>" /><br /><br />
        <div class="form-group">

        </div>
        <label>Mail :</label>
        <input class="form-control" type="text" name="newmail" placeholder="Mail" value="<?php echo $user['mail']; ?>" /><br /><br />
        <div class="form-group">

        </div>
        <label>Mot de passe :</label>
        <input class="form-control" type="password" name="newmdp1" placeholder="Mot de passe"/><br /><br />

        <div class="form-group">
          <label>Confirmation - mot de passe :</label>
          <input class="form-control" type="password" name="newmdp2" placeholder="Confirmation du mot de passe" /><br /><br />
        </div>

        <div class="error ">
          <input class="btn btn-primary" type="submit" value="Valider " />
          <input type="reset" value="Annuler" name="reset" class="btn btn-danger">


        </div>

      </form>
      <div class="error">
        <?php if(isset($msg)) { echo $msg; } ?>
      </div>
    </div>
  </div>
</div>
</body>
</html>
<?php
}
else
{
  header("Location: connexion.php");
}
?>
