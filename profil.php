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

if(isset($_GET['id']) AND $_GET['id'] > 0)
{
	$getid = intval($_GET['id']);
	$requser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
	$requser->execute(array($getid));
	$userinfo = $requser->fetch();
?>


<html>
	<head>
		<title>Profil</title>
		<meta charset="utf-8">
	</head>
	<body>
		<div align="center">
			<h2>Profil de <?php echo $userinfo['nom']; echo " "; echo $userinfo['prenom']; ?></h2>
			<br /><br />

			Nom = <?php echo $userinfo['nom']; ?>
			<br />
      Prénom = <?php echo $userinfo['prenom']; ?>
			<br />
			Mail = <?php echo $userinfo['mail']; ?>
			<br />
			<?php
			if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id'])
			{
			?>
			<br />
			<a href="editionprofil.php">Editer mon profil</a>
      <a href="formulaireCV.php">Créer son CV</a>
			<a href="deconnexion.php">Se déconnecter</a>
			<?php
			}
			?>
		</div>
	</body>
</html>
<?php
}
?>
