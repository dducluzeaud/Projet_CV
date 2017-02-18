<?php
session_start();

$bdd = new PDO('mysql:host=localhost:8888;dbname=espace_membre', 'root', 'root');

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
		<title>TUTO PHP</title>
		<meta charset="utf-8">
	</head>
	<body>
		<div align="center">
			<h2>Profil de <?php echo $userinfo['pseudo']; ?></h2>
			<br /><br />
			<?php
			if(isset($_SESSION['id']) AND $_SESSION['id'] != $getid) {
				$isfollowingornot = $bdd->prepare('SELECT * FROM follow WHERE id_follower = ? AND id_following = ?');
				$isfollowingornot->execute(array($_SESSION['id'],$getid));
				$isfollowingornot = $isfollowingornot->rowCount();
				if($isfollowingornot == 1) {
			?>

			Pseudo = <?php echo $userinfo['pseudo']; ?>
			<br />
			Mail = <?php echo $userinfo['mail']; ?>
			<br />

			<?php
			if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id'])
			{
			?>
			<br />
			<a href="editionprofil.php">Editer mon profil</a>
			<a href="deconnexion.php">Se déconnecter</a>
			<?php
			}
			?>
		</div>
	</body>
</html>
