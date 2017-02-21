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

if(isset($_POST['formconnexion']))
{
  $mailconnect = htmlspecialchars($_POST['mailconnect']);
  $mdpconnect = sha1($_POST['mdpconnect']);
  if(!empty($mailconnect) AND !empty($mdpconnect))
  {
    $requser = $bdd->prepare("SELECT * FROM membres WHERE mail = ? AND motdepasse = ?");
    $requser->execute(array($mailconnect, $mdpconnect));
    $userexist = $requser->rowCount();
    if($userexist == 1)
    {
      if(isset($_POST['rememberme'])) {
        setcookie('email',$mailconnect,time()+365*24*3600,null,null,false,true);
        setcookie('password',$mdpconnect,time()+365*24*3600,null,null,false,true);
      }
      $userinfo = $requser->fetch();
      $_SESSION['id'] = $userinfo['id'];
      $_SESSION['nom'] = $userinfo['nom'];
      $_SESSION['prenom'] = $userinfo['prenom'];
      $_SESSION['mail'] = $userinfo['mail'];
      header("Location: profil.php?id=".$_SESSION['id']);
    }
    else
    {
      $erreur = "Mauvais mail ou mot de passe !";
    }
  }
  else
  {
    $erreur = "Tous les champs doivent être complétés !";
  }
}

?>
<html>
<head>
  <title>Connexion</title>
  <meta charset="utf-8">
  <link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
  <link rel="stylesheet" href="style.css"/>
</head>

<body>
  <div class="container-fluid">
    <a href="accueil.php"><img class=" col-md-2 hidden-sm hidden-xs" src="image/logoMaster.png" alt="logo"></a>
    <h1 class="col-md-8">Connexion</h1>
  </div>
  <br><br>
  <div class="container">
    <form method="POST" action="">
      <div class="form-group">
        <input class="form-control" type="email" name="mailconnect" placeholder="Mail" />
      </div>
      <div class="form-group">
        <input class="form-control" type="password" name="mdpconnect" placeholder="Mot de passe" />
      </div>

      <div class="form-group col-lg-offset-4 ">
        <div class="col-lg-5">
          <div class="form-group">
            <div id="remember" class="checkbox error">
              <label>
                <input class="btn btn-lg btn-primary btn-block btn-signin " type="checkbox" value="remember-me"> Se souvenir de moi
              </label>
            </div>
            <div class="form-group">
              <input type="submit" name="formconnexion"  class="btn btn-primary form-control" value="Se connecter !" />
            </div>

            <div class="form-group error">
              <?php
              if(isset($erreur))
              {
                echo '<font color="red">'.$erreur."</font>";
              }
              ?>
            </div>

          </div>
        </div>

      </form>
    </div>
  </div>

</body>
</html>
