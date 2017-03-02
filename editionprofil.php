<?php
session_start();

include('connexion_BDD.php');

include_once('cookieconnect.php');

if(isset($_SESSION['ID_etu']))
{
  $requser = $bdd->prepare("SELECT * FROM etudiant WHERE ID_etu = ?");
  $requser->execute(array($_SESSION['ID_etu']));
  $user = $requser->fetch();

  if(isset($_POST['newNom']) AND !empty($_POST['newNom']) AND $_POST['newNom'] != $user['nom'])
  {
    $newNom = htmlspecialchars($_POST['newNom']);
    $insertNom = $bdd->prepare("UPDATE etudiant SET nom = ? WHERE ID_etu = ?");
    $insertNom->execute(array($newNom, $_SESSION['ID_etu']));
    header('Location: profil.php?ID_etu='.$_SESSION['ID_etu']);
  }
  if(isset($_POST['newPrenom']) AND !empty($_POST['newPrenom']) AND $_POST['newPrenom'] != $user['prenom'])
  {
    $newPrenom = htmlspecialchars($_POST['newPrenom']);
    $insertPrenom = $bdd->prepare("UPDATE membres SET prenom = ? WHERE ID_etu = ?");
    $insertPrenom->execute(array($newPrenom, $_SESSION['ID_etu']));
    header('Location: profil.php?ID_etu='.$_SESSION['ID_etu']);
  }

  if(isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $user['mail'])
  {
    $newmail = htmlspecialchars($_POST['newmail']);
    $insertmail = $bdd->prepare("UPDATE membres SET mail = ? WHERE ID_etu = ?");
    $insertmail->execute(array($newmail, $_SESSION['ID_etu']));
    header('Location: profil.php?ID_etu='.$_SESSION['ID_etu']);
  }

  if(isset($_POST['newmdp1']) AND !empty($_POST['newmdp1']) AND isset($_POST['newmdp2']) AND !empty($_POST['newmdp2']))
  {
    $mdp1 = sha1($_POST['newmdp1']);
    $mdp2 = sha1($_POST['newmdp2']);

    if($mdp1 == $mdp2)
    {
      $insertmdp = $bdd->prepare("UPDATE etudiant SET mdp = ? WHERE ID_etu = ?");
      $insertmdp->execute(array($mdp1, $_SESSION['ID_etu']));
      header('Location: profil.php?ID_etu='.$_SESSION['ID_etu']);
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

    <?php include('header.php') ?>
  

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

        <div class="centrer ">
          <input class="btn btn-primary" type="submit" value="Valider " />
          <input type="reset" value="Annuler" name="reset" class="btn btn-danger">


        </div>

      </form>
      <div class="centrer">
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
