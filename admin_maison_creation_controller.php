<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=vietsaf;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
// On regarde si le pseudo est pas déjà pris par quelqu'un d'autre
$req = $bdd->prepare('SELECT nom_maison FROM maisons WHERE nom_maison = ?');
$req->execute(array($_POST['nom_maison']));
$resultat = $req->fetch();
// Aucune erreur par défaut
$error_nom_maison = FALSE;
$salon = 0;
$cuisine = 0;
$garage = 0;
$couloir = 0;

// Le pseudo est déjà utilisé
if ($resultat) {
    // Il y a donc une erreur
    $error_nom_maison = TRUE;
    header('Location: admin_maison_creation.php?error_nom_maison=' . $error_nom_maison);
} else {
    if ($_POST['salon']) {
        $salon = 1;
    }
    if ($_POST['cuisine']) {
        $cuisine = 1;
    }
    if ($_POST['garage']) {
        $garage = 1;
    }
    if ($_POST['couloir']) {
        $couloir = 1;
    }

    $req = $bdd->prepare('INSERT INTO maisons (nom_maison, salon, nb_chambre, cuisine, nb_sdb, garage, couloir) VALUES(?, ?, ?, ?, ?, ?, ?)');
    $req->execute(array($_POST['nom_maison'], $salon, $_POST['nb_chambre'], $cuisine, $_POST['nb_sdb'], $garage, $couloir));

    header('Location: admin_maison_creation.php');
}