<?php
if (!isset($_SESSION['ID_etu']) and isset($_COOKIE['email'], $_COOKIE['password']) and !empty($_COOKIE['email']) and !empty($_COOKIE['password'])) {
    $requser = $bdd->prepare("SELECT * FROM etudiant WHERE mail = ? AND motdepasse = ?");
    $requser->execute(array($_COOKIE['email'], $_COOKIE['password']));
    $userexist = $requser->rowCount();
    if ($userexist == 1) {
        $userinfo = $requser->fetch();
        $_SESSION['ID_etu'] = $userinfo['ID_etu'];
        $_SESSION['nom'] = $userinfo['nom'];
        $_SESSION['prenom'] = $userinfo['prenom'];
        $_SESSION['mail'] = $userinfo['mail'];
    }
}
