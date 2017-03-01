<?php
if (isset ($_POST['valider'])){
    //recperation pour la table etudiant
    $email=$_POST['email'];
    $age=$_POST['age'];
    $adresse=$_POST['adresse'];
    $fixe=$_POST['fixe'];
    $portable=$_POST['portable'];
    $permis=$_POST['permis'];
    $voiture=$_POST['voiture'];
    $sexe=$_POST['sexe'];
    $today = date("y-m-d");
    //recuperation pour la table comptences supp
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
    $langue1=$_POST['langue1'];
    $langue2=$_POST['langue2'];
    $langue3=$_POST['langue3'];
    //recuperation pour la table formation
    $annee_diplome1=$_POST['annee_diplome1'];
    $intitule_formation1=$_POST['intitule_formation1'];
    $universite1=$_POST['universite1'];
    $mention1=$_POST['mention1'];
    $description_form1=$_POST['description_form1'];
    $annee_diplome2=$_POST['annee_diplome2'];
    $intitule_formation2=$_POST['intitule_formation2'];
    $universite2=$_POST['universite2'];
    $mention2=$_POST['mention2'];
    $description_form2=$_POST['description_form2'];
    $annee_diplome3=$_POST['annee_diplome3'];
    $intitule_formation3=$_POST['intitule_formation3'];
    $universite3=$_POST['universite3'];
    $mention3=$_POST['mention3'];
    $description_form3=$_POST['description_form3'];
    //recuperation pour la table experiences
    $annee_xp1=$_POST['annee_xp1'];
    $description_xp1=$_POST['description_xp1'];
    $annee_xp2=$_POST['annee_xp2'];
    $description_xp2=$_POST['description_xp2'];
    $annee_xp3=$_POST['annee_xp3'];
    $description_xp3=$_POST['description_xp3'];
    //recuperation pour la table associative
    $association=$_POST['association'];
    //recuperation pour la table divers
    $divers=$_POST['divers'];

    //Appel de la fonction de connexion
    connectMaBase();

    //On prépare les commandes sql d'insertion
    $sql1 = 'INSERT INTO etudiant VALUES("0","'.$age.'","'.$fixe.'","'.$portable.'","'.$sexe.'","'.$today.'""'.$permis.'","'.$voiture.'")';
    $sql2 = 'INSERT INTO competences VALUES("'.$langue1.'","'.$langue2.'","'.$langue3.'","'.$ruby.'","'.$c.'","'.$cpp.'","'.$merise.'","'.$python.'","'.$objectivec.'","'.$perl.'","'.$r.'","'.$pascal.'","'.$swift.'")';
    $sql3 = 'INSERT INTO formations VALUES("'.$annee_diplome1.'","'.$intitule_formation1.'","'.$universite1.'","'.$mention1.'","'.$annee_diplome2.'","'.$intitule_formation2.'","'.$universite2.'","'.$mention2.'","'.$annee_diplome3.'","'.$intitule_formation3.'","'.$universite3.'","'.$mention3.'")';
    $sql4 = 'INSERT INTO experiences VALUES("'.$annee_xp1.'","'.$description_xp1.'","'.$annee_xp2.'","'.$description_xp2.'","'.$annee_xp3.'","'.$description_xp3.'")';
    $sql5 = 'INSERT INTO associatif VALUES("'.$association.'")';
    $sql6 = 'INSERT INTO divers VALUES("'.$divers.'")';
    /*on lance la commande (mysql_query) et au cas où,
    on rédige un message d'erreur si la requête ne passe pas (or die)
    (Message qui intègrera les causes d'erreur sql)*/
    mysql_query ($sql1) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error());
    mysql_query ($sql2) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error());
    mysql_query ($sql3) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error());
    mysql_query ($sql4) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error());
    mysql_query ($sql5) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error());
    mysql_query ($sql6) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error());


    // fermeture de la connexion la connexion
    mysql_close();
}
?>
