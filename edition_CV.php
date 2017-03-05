<?php

if (isset($_SESSION['ID_etu'])) {

  // table contact

  $requser = $bdd->prepare("SELECT * FROM contact WHERE ID_etu = ?");
  $requser->execute(array($_SESSION['ID_etu']));
  $user = $requser->fetch();

  if (isset($_POST['newAge']) and !empty($_POST['newAge']) and $_POST['newAge'] != $user['age']) {
    $newAge = htmlspecialchars($_POST['newAge']);
    $insertNom = $bdd->prepare("UPDATE contact SET age = ? WHERE ID_etu = ?");
    $insertNom->execute(array($newAge, $_SESSION['ID_etu']));
    header('Location: profil.php?ID_etu='.$_SESSION['ID_etu']);
  }
  if (isset($_POST['newAdresse']) and !empty($_POST['newAdresse']) and $_POST['newAdresse'] != $user['adresse']) {
    $newAdresse= htmlspecialchars($_POST['newAdresse']);
    $insertNom = $bdd->prepare("UPDATE contact SET adresse = ? WHERE ID_etu = ?");
    $insertNom->execute(array($newAdresse, $_SESSION['ID_etu']));
    header('Location: profil.php?ID_etu='.$_SESSION['ID_etu']);
  }
  if (isset($_POST['newFixe']) and !empty($_POST['newFixe']) and $_POST['newFixe'] != $user['fixe']) {
    $newFixe = htmlspecialchars($_POST['newFixe']);
    $insertNom = $bdd->prepare("UPDATE contact SET fixe = ? WHERE ID_etu = ?");
    $insertNom->execute(array($newFixe, $_SESSION['ID_etu']));
    header('Location: profil.php?ID_etu='.$_SESSION['ID_etu']);
  }
  if (isset($_POST['newPortable']) and !empty($_POST['newPortable']) and $_POST['newPortable'] != $user['portable']) {
    $newPortable = htmlspecialchars($_POST['newPortable']);
    $insertNom = $bdd->prepare("UPDATE contact SET portable = ? WHERE ID_etu = ?");
    $insertNom->execute(array($newPortable, $_SESSION['ID_etu']));
    header('Location: profil.php?ID_etu='.$_SESSION['ID_etu']);
  }

  // table compétences

  $requser = $bdd->prepare("SELECT * FROM competences WHERE ID_etu = ?");
  $requser->execute(array($_SESSION['ID_etu']));
  $user = $requser->fetch();

  if (isset($_POST['newLangues1']) and !empty($_POST['newLangues1']) and $_POST['newLangues1'] != $user['langues1']) {
    $newLangues1 = htmlspecialchars($_POST['newLangues1']);
    $insertNom = $bdd->prepare("UPDATE contact SET langues1 = ? WHERE ID_etu = ?");
    $insertNom->execute(array($newLangues1, $_SESSION['ID_etu']));
    header('Location: profil.php?ID_etu='.$_SESSION['ID_etu']);
  }
  if (isset($_POST['newLangues2']) and !empty($_POST['newLangues2']) and $_POST['newLangues2'] != $user['langues2']) {
    $newLangues2 = htmlspecialchars($_POST['newLangues2']);
    $insertNom = $bdd->prepare("UPDATE contact SET langues2 = ? WHERE ID_etu = ?");
    $insertNom->execute(array($newLangues2, $_SESSION['ID_etu']));
    header('Location: profil.php?ID_etu='.$_SESSION['ID_etu']);
  }
  if (isset($_POST['newLangues3']) and !empty($_POST['newLangues3']) and $_POST['newLangues3'] != $user['langues3']) {
    $newLangues3 = htmlspecialchars($_POST['newLangues3']);
    $insertNom = $bdd->prepare("UPDATE contact SET langues3 = ? WHERE ID_etu = ?");
    $insertNom->execute(array($newLangues3, $_SESSION['ID_etu']));
    header('Location: profil.php?ID_etu='.$_SESSION['ID_etu']);
  }

  // Table formation

  $requser = $bdd->prepare("SELECT * FROM formation WHERE ID_etu = ?");
  $requser->execute(array($_SESSION['ID_etu']));
  $user = $requser->fetch();

  //Formation 1

  if (isset($_POST['newAnneDiplome1']) and !empty($_POST['newAnneDiplome1']) and $_POST['newAnneDiplome1'] != $user['annee_diplome1']) {
    $newAnneDiplome1 = htmlspecialchars($_POST['newLangues3']);
    $insertNom = $bdd->prepare("UPDATE formation SET annee_diplome1 = ? WHERE ID_etu = ?");
    $insertNom->execute(array($newAnneDiplome1, $_SESSION['ID_etu']));
    header('Location: profil.php?ID_etu='.$_SESSION['ID_etu']);
  }
  if (isset($_POST['newIntituleFom1']) and !empty($_POST['newIntituleFom1']) and $_POST['newIntituleFom1'] != $user['intitule_formation1']) {
    $newIntituleFom1 = htmlspecialchars($_POST['newIntituleFom1']);
    $insertNom = $bdd->prepare("UPDATE formation SET intitule_formation1 = ? WHERE ID_etu = ?");
    $insertNom->execute(array($newIntituleFom1, $_SESSION['ID_etu']));
    header('Location: profil.php?ID_etu='.$_SESSION['ID_etu']);
  }
  if (isset($_POST['newLangues3']) and !empty($_POST['newLangues3']) and $_POST['newLangues3'] != $user['langues3']) {
    $newLangues3 = htmlspecialchars($_POST['newLangues3']);
    $insertNom = $bdd->prepare("UPDATE formation SET langues3 = ? WHERE ID_etu = ?");
    $insertNom->execute(array($newLangues3, $_SESSION['ID_etu']));
    header('Location: profil.php?ID_etu='.$_SESSION['ID_etu']);
  }
  if (isset($_POST['newUniversite1']) and !empty($_POST['newUniversite1']) and $_POST['newUniversite1'] != $user['universite1']) {
    $newUniversite1 = htmlspecialchars($_POST['newUniversite1']);
    $insertNom = $bdd->prepare("UPDATE formation SET universite1 = ? WHERE ID_etu = ?");
    $insertNom->execute(array($newUniversite1, $_SESSION['ID_etu']));
    header('Location: profil.php?ID_etu='.$_SESSION['ID_etu']);
  }
  if (isset($_POST['newMention1']) and !empty($_POST['newMention1']) and $_POST['newMention1'] != $user['mention1']) {
    $newMention1 = htmlspecialchars($_POST['newMention1']);
    $insertNom = $bdd->prepare("UPDATE formation SET mention1 = ? WHERE ID_etu = ?");
    $insertNom->execute(array($newMention1, $_SESSION['ID_etu']));
    header('Location: profil.php?ID_etu='.$_SESSION['ID_etu']);
  }
  if (isset($_POST['newDescription_form1']) and !empty($_POST['newDescription_form1']) and $_POST['newDescription_form1'] != $user['description_form1']) {
    $newDescription_form1 = htmlspecialchars($_POST['newDescription_form1']);
    $insertNom = $bdd->prepare("UPDATE formation SET description_form1 = ? WHERE ID_etu = ?");
    $insertNom->execute(array($newDescription_form1, $_SESSION['ID_etu']));
    header('Location: profil.php?ID_etu='.$_SESSION['ID_etu']);
  }

  // formation 2

  if (isset($_POST['newAnneDiplome2']) and !empty($_POST['newAnneDiplome2']) and $_POST['newAnneDiplome2'] != $user['annee_diplome2']) {
    $newAnneDiplome2 = htmlspecialchars($_POST['newLangues3']);
    $insertNom = $bdd->prepare("UPDATE formation SET annee_diplome2 = ? WHERE ID_etu = ?");
    $insertNom->execute(array($newAnneDiplome2, $_SESSION['ID_etu']));
    header('Location: profil.php?ID_etu='.$_SESSION['ID_etu']);
  }
  if (isset($_POST['newIntituleFom2']) and !empty($_POST['newIntituleFom2']) and $_POST['newIntituleFom2'] != $user['intitule_formation2']) {
    $newIntituleFom2 = htmlspecialchars($_POST['newIntituleFom2']);
    $insertNom = $bdd->prepare("UPDATE formation SET intitule_formation2 = ? WHERE ID_etu = ?");
    $insertNom->execute(array($newIntituleFom2, $_SESSION['ID_etu']));
    header('Location: profil.php?ID_etu='.$_SESSION['ID_etu']);
  }
  if (isset($_POST['newLangues3']) and !empty($_POST['newLangues3']) and $_POST['newLangues3'] != $user['langues3']) {
    $newLangues3 = htmlspecialchars($_POST['newLangues3']);
    $insertNom = $bdd->prepare("UPDATE formation SET langues3 = ? WHERE ID_etu = ?");
    $insertNom->execute(array($newLangues3, $_SESSION['ID_etu']));
    header('Location: profil.php?ID_etu='.$_SESSION['ID_etu']);
  }
  if (isset($_POST['newUniversite2']) and !empty($_POST['newUniversite2']) and $_POST['newUniversite2'] != $user['universite2']) {
    $newUniversite2 = htmlspecialchars($_POST['newUniversite2']);
    $insertNom = $bdd->prepare("UPDATE formation SET universite2 = ? WHERE ID_etu = ?");
    $insertNom->execute(array($newUniversite2, $_SESSION['ID_etu']));
    header('Location: profil.php?ID_etu='.$_SESSION['ID_etu']);
  }
  if (isset($_POST['newMention2']) and !empty($_POST['newMention2']) and $_POST['newMention2'] != $user['mention2']) {
    $newMention2 = htmlspecialchars($_POST['newMention2']);
    $insertNom = $bdd->prepare("UPDATE formation SET mention2 = ? WHERE ID_etu = ?");
    $insertNom->execute(array($newMention2, $_SESSION['ID_etu']));
    header('Location: profil.php?ID_etu='.$_SESSION['ID_etu']);
  }
  if (isset($_POST['newDescription_form2']) and !empty($_POST['newDescription_form2']) and $_POST['newDescription_form2'] != $user['description_form2']) {
    $newDescription_form2 = htmlspecialchars($_POST['newDescription_form2']);
    $insertNom = $bdd->prepare("UPDATE formation SET description_form2 = ? WHERE ID_etu = ?");
    $insertNom->execute(array($newDescription_form2, $_SESSION['ID_etu']));
    header('Location: profil.php?ID_etu='.$_SESSION['ID_etu']);
  }

  // formation 3

  if (isset($_POST['newAnneDiplome3']) and !empty($_POST['newAnneDiplome3']) and $_POST['newAnneDiplome3'] != $user['annee_diplome3']) {
    $newAnneDiplome3 = htmlspecialchars($_POST['newLangues3']);
    $insertNom = $bdd->prepare("UPDATE formation SET annee_diplome3 = ? WHERE ID_etu = ?");
    $insertNom->execute(array($newAnneDiplome3, $_SESSION['ID_etu']));
    header('Location: profil.php?ID_etu='.$_SESSION['ID_etu']);
  }
  if (isset($_POST['newIntituleFom3']) and !empty($_POST['newIntituleFom3']) and $_POST['newIntituleFom3'] != $user['intitule_formation3']) {
    $newIntituleFom3 = htmlspecialchars($_POST['newIntituleFom3']);
    $insertNom = $bdd->prepare("UPDATE formation SET intitule_formation3 = ? WHERE ID_etu = ?");
    $insertNom->execute(array($newIntituleFom3, $_SESSION['ID_etu']));
    header('Location: profil.php?ID_etu='.$_SESSION['ID_etu']);
  }
  if (isset($_POST['newLangues3']) and !empty($_POST['newLangues3']) and $_POST['newLangues3'] != $user['langues3']) {
    $newLangues3 = htmlspecialchars($_POST['newLangues3']);
    $insertNom = $bdd->prepare("UPDATE formation SET langues3 = ? WHERE ID_etu = ?");
    $insertNom->execute(array($newLangues3, $_SESSION['ID_etu']));
    header('Location: profil.php?ID_etu='.$_SESSION['ID_etu']);
  }
  if (isset($_POST['newUniversite3']) and !empty($_POST['newUniversite3']) and $_POST['newUniversite3'] != $user['universite3']) {
    $newUniversite3 = htmlspecialchars($_POST['newUniversite3']);
    $insertNom = $bdd->prepare("UPDATE formation SET universite3 = ? WHERE ID_etu = ?");
    $insertNom->execute(array($newUniversite3, $_SESSION['ID_etu']));
    header('Location: profil.php?ID_etu='.$_SESSION['ID_etu']);
  }
  if (isset($_POST['newMention3']) and !empty($_POST['newMention3']) and $_POST['newMention3'] != $user['mention3']) {
    $newMention3 = htmlspecialchars($_POST['newMention3']);
    $insertNom = $bdd->prepare("UPDATE formation SET mention3 = ? WHERE ID_etu = ?");
    $insertNom->execute(array($newMention3, $_SESSION['ID_etu']));
    header('Location: profil.php?ID_etu='.$_SESSION['ID_etu']);
  }
  if (isset($_POST['newDescription_form3']) and !empty($_POST['newDescription_form3']) and $_POST['newDescription_form3'] != $user['description_form3']) {
    $newDescription_form3 = htmlspecialchars($_POST['newDescription_form3']);
    $insertNom = $bdd->prepare("UPDATE formation SET description_form3 = ? WHERE ID_etu = ?");
    $insertNom->execute(array($newDescription_form3, $_SESSION['ID_etu']));
    header('Location: profil.php?ID_etu='.$_SESSION['ID_etu']);
  }

  // table exérience

  $requser = $bdd->prepare("SELECT * FROM experience WHERE ID_etu = ?");
  $requser->execute(array($_SESSION['ID_etu']));
  $user = $requser->fetch();

  if (isset($_POST['newAnnee_xp1']) and !empty($_POST['newAnnee_xp1']) and $_POST['newAnnee_xp1'] != $user['annee_xp1']) {
    $newAnnee_xp1 = htmlspecialchars($_POST['newAnnee_xp1']);
    $insertNom = $bdd->prepare("UPDATE experience SET annee_xp1 = ? WHERE ID_etu = ?");
    $insertNom->execute(array($newAnnee_xp1, $_SESSION['ID_etu']));
    header('Location: profil.php?ID_etu='.$_SESSION['ID_etu']);
  }
  if (isset($_POST['newDescrition_xp1']) and !empty($_POST['newDescrition_xp1']) and $_POST['newDescrition_xp1'] != $user['description_xp1']) {
    $newDescrition_xp1 = htmlspecialchars($_POST['newDescrition_xp1']);
    $insertNom = $bdd->prepare("UPDATE experience SET description_xp1 = ? WHERE ID_etu = ?");
    $insertNom->execute(array($newDescrition_xp1, $_SESSION['ID_etu']));
    header('Location: profil.php?ID_etu='.$_SESSION['ID_etu']);
  }
  if (isset($_POST['newAnnee_xp2']) and !empty($_POST['newAnnee_xp2']) and $_POST['newAnnee_xp2'] != $user['annee_xp2']) {
    $newAnnee_xp2 = htmlspecialchars($_POST['newAnnee_xp2']);
    $insertNom = $bdd->prepare("UPDATE experience SET annee_xp2 = ? WHERE ID_etu = ?");
    $insertNom->execute(array($newAnnee_xp2, $_SESSION['ID_etu']));
    header('Location: profil.php?ID_etu='.$_SESSION['ID_etu']);
  }
  if (isset($_POST['newDescrition_xp2']) and !empty($_POST['newDescrition_xp2']) and $_POST['newDescrition_xp2'] != $user['description_xp2']) {
    $newDescrition_xp2 = htmlspecialchars($_POST['newDescrition_xp2']);
    $insertNom = $bdd->prepare("UPDATE experience SET description_xp2 = ? WHERE ID_etu = ?");
    $insertNom->execute(array($newDescrition_xp2, $_SESSION['ID_etu']));
    header('Location: profil.php?ID_etu='.$_SESSION['ID_etu']);
  }
  if (isset($_POST['newAnnee_xp3']) and !empty($_POST['newAnnee_xp3']) and $_POST['newAnnee_xp3'] != $user['annee_xp3']) {
    $newAnnee_xp3 = htmlspecialchars($_POST['newAnnee_xp3']);
    $insertNom = $bdd->prepare("UPDATE experience SET annee_xp3 = ? WHERE ID_etu = ?");
    $insertNom->execute(array($newAnnee_xp3, $_SESSION['ID_etu']));
    header('Location: profil.php?ID_etu='.$_SESSION['ID_etu']);
  }
  if (isset($_POST['newDescrition_xp3']) and !empty($_POST['newDescrition_xp3']) and $_POST['newDescrition_xp3'] != $user['description_xp3']) {
    $newDescrition_xp3 = htmlspecialchars($_POST['newDescrition_xp3']);
    $insertNom = $bdd->prepare("UPDATE experience SET description_xp3 = ? WHERE ID_etu = ?");
    $insertNom->execute(array($newDescrition_xp3, $_SESSION['ID_etu']));
    header('Location: profil.php?ID_etu='.$_SESSION['ID_etu']);
  }

  // table associatif

  $requser = $bdd->prepare("SELECT * FROM associatif WHERE ID_etu = ?");
  $requser->execute(array($_SESSION['ID_etu']));
  $user = $requser->fetch();

  if (isset($_POST['newAssociation']) and !empty($_POST['newAssociation']) and $_POST['newAssociation'] != $user['association']) {
    $newAssociation = htmlspecialchars($_POST['newAssociation']);
    $insertNom = $bdd->prepare("UPDATE associatif SET association = ? WHERE ID_etu = ?");
    $insertNom->execute(array($newAssociation, $_SESSION['ID_etu']));
    header('Location: profil.php?ID_etu='.$_SESSION['ID_etu']);
  }

  // table divers

  $requser = $bdd->prepare("SELECT * FROM divers WHERE ID_etu = ?");
  $requser->execute(array($_SESSION['ID_etu']));
  $user = $requser->fetch();

  if (isset($_POST['newDivers']) and !empty($_POST['newDivers']) and $_POST['newDivers'] != $user['divers']) {
    $newDivers= htmlspecialchars($_POST['newDivers']);
    $insertNom = $bdd->prepare("UPDATE divers SET divers = ? WHERE ID_etu = ?");
    $insertNom->execute(array($newDivers, $_SESSION['ID_etu']));
    header('Location: profil.php?ID_etu='.$_SESSION['ID_etu']);
  }

}
?>
