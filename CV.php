<?php
session_start();

include('connexion_BDD.php');

include_once('cookieconnect.php');

require("tpl/Smarty.class.php");

$Smarty = new Smarty;


$reponse = $bdd->query('SELECT * FROM etudiant WHERE id = $ID_etu ');
$donnees = $reponse->fetch();


$Smarty->assign('nom',$donnees['nom']);
$Smarty->assign('prenom',$donnees['prenom']);
$Smarty->assign('email',$donnees['mail']);
$Smarty->assign('adresse',$donnees['adresse']);
$Smarty->assign('telephone_fixe',$donnees['telephone_fixe']);
$Smarty->assign('telephone_portable',$donnees['telephone_portable']);



$reponse = $bdd->query('SELECT * FROM competences WHERE id = $ID_etu ');
$donnees = $reponse->fetch();

$Smarty->assign('langues1',$donnees['langues1']);
$Smarty->assign('langues2',$donnees['langues2']);
$Smarty->assign('langues3',$donnees['langues3']);

$reponse = $bdd->query('SELECT * FROM associatif');
$donnees = $reponse->fetch();

$Smarty->assign('association',$donnees['association']);

$reponse = $bdd->query('SELECT * FROM divers WHERE ID_etu ');
$donnees = $reponse->fetch();

$Smarty->assign('divers',$donnees['divers']);


$reponse = $bdd->query('SELECT * FROM formations WHERE id');
$donnees = $reponse->fetch();

$Smarty->assign('anneeform1',$donnees['annee_diplome1']);
$Smarty->assign('intituleform1',$donnees['intitule_formation1']);
$Smarty->assign('description1',$donnees['description_form1']);
$Smarty->assign('univ1',$donnees['universite1']);
$Smarty->assign('mention1',$donnees['mention1']);

$Smarty->assign('anneeform2',$donnees['annee_diplome2']);
$Smarty->assign('intituleform2',$donnees['intitule_formation2']);
$Smarty->assign('description2',$donnees['description_form2']);
$Smarty->assign('univ2',$donnees['universite2']);
$Smarty->assign('mention2',$donnees['mention2']);

$Smarty->assign('anneeform3',$donnees['annee_diplome3']);
$Smarty->assign('intituleform3',$donnees['intitule_formation3']);
$Smarty->assign('description3',$donnees['description_form3']);
$Smarty->assign('univ3',$donnees['universite3']);
$Smarty->assign('mention3',$donnees['mention3']);


$reponse = $bdd->query('SELECT * FROM experiences WHERE id  ');
$donnees = $reponse->fetch();

$Smarty->assign('anneexp1',$donnees['annee_xp1']);
$Smarty->assign('description1',$donnees['description1']);
$Smarty->assign('anneexp2',$donnees['annee_xp2']);
$Smarty->assign('description2',$donnees['description2']);
$Smarty->assign('anneexp3',$donnees['annee_xp3']);
$Smarty->assign('description3',$donnees['description3']);



$Smarty->display('CV.tpl');

?>
