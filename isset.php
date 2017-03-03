<?php

if (isset ($_POST['valider'])){


  //recperation pour la table etudiant
  $ID_etu=intval($_SESSION['ID_etu']);

  // recuperation pour la table informa
  $age=($_POST['age']);
  $adresse=htmlspecialchars($_POST['adresse']);
  $fixe=htmlspecialchars($_POST['telephone_fixe']);
  $portable=htmlspecialchars($_POST['telephone_portable']);

  //recuperation pour la table comptences supp
  $langue1=htmlspecialchars($_POST['langue1']);
  $langue2=htmlspecialchars($_POST['langue2']);
  $langue3=htmlspecialchars($_POST['langue3']);

  //recuperation pour la table formation
  $annee_diplome1=htmlspecialchars($_POST['annee_diplome1']);
  $intitule_formation1=htmlspecialchars($_POST['intitule_formation1']);
  $universite1=htmlspecialchars($_POST['universite1']);
  $mention1=htmlspecialchars($_POST['mention1']);
  $description_form1=htmlspecialchars($_POST['description_form1']);
  $annee_diplome2=htmlspecialchars($_POST['annee_diplome2']);
  $intitule_formation2=htmlspecialchars($_POST['intitule_formation2']);
  $universite2=htmlspecialchars($_POST['universite2']);
  $mention2=htmlspecialchars($_POST['mention2']);
  $description_form2=htmlspecialchars($_POST['description_form2']);
  $annee_diplome3=htmlspecialchars($_POST['annee_diplome3']);
  $intitule_formation3=htmlspecialchars($_POST['intitule_formation3']);
  $universite3=htmlspecialchars($_POST['universite3']);
  $mention3=htmlspecialchars($_POST['mention3']);
  $description_form3=htmlspecialchars($_POST['description_form3']);

  //recuperation pour la table experiences
  $annee_xp1=htmlspecialchars($_POST['annee_xp1']);
  $description_xp1=htmlspecialchars($_POST['description_xp1']);
  $annee_xp2=htmlspecialchars($_POST['annee_xp2']);
  $description_xp2=htmlspecialchars($_POST['description_xp2']);
  $annee_xp3=htmlspecialchars($_POST['annee_xp3']);
  $description_xp3=htmlspecialchars($_POST['description_xp3']);

  //recuperation pour la table associative
  $association=htmlspecialchars($_POST['association']);

  //recuperation pour la table divers
  $divers=htmlspecialchars($_POST['divers']);

  //Appel de la fonction de connexion, ne pas oublier le "include" qui va aller chercher la fonction dans un autre fichier.

  //insertion dans la table etudiants

  if (!empty($_POST['age']) and !empty($_POST['adresse'])) {
    if ($age < 120 && $age > 0) {
      $fixelength = strlen($fixe);
      if ($fixe == 10){
        $portablelength = strlen($portable);
        if ($portable ==10) {

          $insertmbr = $bdd->prepare("INSERT INTO etudiant(age, adresse, telephone_fixe, telephone_portable) VALUES (?,?,?,?)");
          $insertmbr->execute(array($age,$adresse,$fixe,$portable));

        } else {
          $erreur = "Le numéro de portable doit comporter 10 caractères";
        }
      } else {
        $erreur = "Le numéro de fixe doit comporter 10 caractères";
      }
    } else {
      $erreur = "Veuillez vérifier votre âge.";
    }
  } else {
    $erreur = "Veuillez remplir les champs indispensable (*)";
  }




  // insertion dans la table competences

  if (!empty($_POST['langue1'])){
    $insertmbr = $bdd->prepare("INSERT INTO competences(ID_etu,langues1,langues2,langues3) VALUES (?,?,?,?)");
    $insertmbr->execute(array($ID_etu,$langue1,$langue2,$langue3));
  } else {
    $erreur = "Veuilez rentrer valeur dans le champ langue 1";
  }


  // insertion dans la table formations


  if (!empty($_POST['description_form1']) and !empty($_POST['universite1'] )) {


    $insertmbr = $bdd->prepare("INSERT INTO formations(ID_etu, annee_diplome1,intitule_formation1,universite1,mention1,description_form1,annee_diplome2,intitule_formation2,universite2,mention2,description_form2,annee_diplome3,intitule_formation3,universite3,mention3,description_form3 ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $insertmbr->execute(array($ID_etu, $annee_diplome1,$intitule_formation1,$universite1,$mention1,$description_form1,$annee_diplome2,$intitule_formation2,$universite2,$mention2,$description_form2,$annee_diplome3,$intitule_formation3,$universite3,$mention3,$description_form3));


  } else {
    $erreur = 'Veuillez renseigner tous les champs de la formation 1.';
  }


  // insertion dans la table expérience
  if (!empty($_POST['annee_xp1']) and !empty($_POST['description_xp1'])) {

    $insertmbr = $bdd->prepare("INSERT INTO experiences(ID_etu, annee_xp1,description1,annee_xp2,description2,annee_xp3, description3 ) VALUES (?,?,?,?,?,?,?)");
    $insertmbr->execute(array($ID_etu, $annee_xp1,$description_xp1,$annee_xp2,$description_xp2,$annee_xp3,$description_xp3));

    $erreur = 'Enregistrement réussi !';

  } else {
    $erreur = "Veuillez renseigner tous les champs d'experience 1";
  }







  // insertion dans la table associative
  $insertmbr = $bdd->prepare("INSERT INTO associatif(ID_etu, association) VALUES (?,?)");
  $insertmbr->execute(array($ID_etu, $association));

  //insertion dans la table divers
  $insertmbr = $bdd->prepare("INSERT INTO divers(ID_etu, divers) VALUES (?,?)");
  $insertmbr->execute(array($ID_etu,$divers));

}
?>
