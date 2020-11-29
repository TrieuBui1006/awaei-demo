<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=vietsaf;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
// On regarde si le pseudo est pas déjà pris par quelqu'un d'autre
$req = $bdd->prepare('SELECT nom_salle FROM salles WHERE nom_salle = ?');
$req->execute(array($_POST['nom_salle']));
$resultat = $req->fetch();
// Aucune erreur par défaut
$error_nom_salle = FALSE;
$tempSalle = 0;
$tempEau = 0;
$lumiere = 0;
$radiateur = 0;
$eauChaude = 0;

// Le pseudo est déjà utilisé
if ($resultat) {
    // Il y a donc une erreur
    $error_nom_salle = TRUE;
    header('Location: salle_creation.php?error_nom_salle=' . $error_nom_salle);
} else {
    if ($_POST['tempSalle']) {
        $tempSalle = 1;
    }
    if ($_POST['tempEau']) {
        $tempEau = 1;
    }
    if ($_POST['lumiere']) {
        $lumiere = 1;
    }
    if ($_POST['radiateur']) {
        $radiateur = 1;
    }
    if ($_POST['eauChaude']) {
        $eauChaude = 1;
    }

    $req = $bdd->prepare('INSERT INTO salles (nom_salle, tempSalle, tempEau, lumiere, radiateur, eauChaude) VALUES(?, ?, ?, ?, ?, ?)');
    $req->execute(array($_POST['nom_salle'], $tempSalle, $tempEau, $lumiere, $radiateur, $eauChaude));

    header('Location: salle_creation.php');
}