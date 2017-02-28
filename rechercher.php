<?php

if (isset($_POST['requete']) && $_POST['requete'] != null) {
    include('connexion_BDD.php');

    $requete = htmlspecialchars($_POST['requete']);//La fonction extract puet t'aidér pour sa
  $req = $bdd->prepare("SELECT * FROM membres WHERE nom LIKE :requete ORDER BY id DESC"); // la requête, que vous devez maintenant comprendre
  $req->execute(array('requete' => $requete . '%'));


    $nb_resultats = $req->rowCount(); // on utilise la fonction mysql_num_rows pour compter les résultats pour vérifier par la suite
  if ($nb_resultats != 0) { // si le nombre de résultats est supérieur à 0, on continue

    ?>
    <h3>Résultats de votre recherche.</h3>
    <p>Nous avons trouvé <?php echo $nb_resultats; // on affiche le nombre de résultats
    if ($nb_resultats > 1) {
        echo 'résultats';
    } else {
        echo 'résultat';
    } // on vérifie le nombre de résultats correctement.
    ?>
    dans notre base de données. Voici les fonctions que nous avons trouvées :<br/>
    <br/>
    <?php
    while ($donnees = $req->fetch()) { // on fait un while pour afficher la liste des fonctions trouvées, ainsi que l'id qui permettra de faire le lien vers la page de la fonction
      ?>
      <a href="fonction.php?id=<?php echo $donnees['id']; ?>"><?php echo $donnees['nom_fonction']; ?></a><br/>
      <?php

    } // fin de la boucle
    ?><br/>
    <br/>
    <a href="accueil.php">Faire une nouvelle recherche</a></p>
    <?php

  } // Fin d'affichage des résultats
  else {
      ?>
    <h3>Pas de résultats</h3>
    <p>Nous n'avons trouvé aucun résultat pour votre requête "<?php echo $_POST['requete']; ?>". <a href="rechercher.php">Réessayez</a> avec autre chose.</p>
    <?php

  }// fin de l'affichage des erreurs
  $req->closeCursor(); // on ferme mysql
}
?>
