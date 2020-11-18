<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=vietsaf;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
// On récupère le mot de passe qui correspond au pseudo saisi
$req = $bdd->prepare('SELECT id_utilisateur, mot_de_passe FROM membres WHERE email = ?');
$req->execute(array($_POST['email']));
$resultat = $req->fetch();
// Le mot de passe est le bon
if (password_verify($_POST['mot_de_passe'], $resultat['mot_de_passe'])) {
    $isPasswordCorrect = TRUE;
}
// Le mot de passe n'est pas le bon
else {
    $isPasswordCorrect = FALSE;
}
// Le pseudo n'a pas été trouvé dans la BDD
if (!$resultat) {
    $error = TRUE;
    header('Location: seConnecter.php?error=' . $error);
}
// Le pseudo existe dans la BDD
else {
    // Le mot de passe est le bon
    if ($isPasswordCorrect) {
        // On crée la session de l'utilisateur
        session_start();
        $_SESSION['id_utilisateur'] = $resultat['id_utilisateur'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['prenom'] = $_POST['prenom'];
        $_SESSION['nom'] = $_POST['nom'];
        header('Location: index.php');
    }
    // Le mot de passe n'est pas le bon
    else {
        $error = TRUE;
        header('Location: seConnecter.php?error=' . $error);
    }
}