<?php
try {
	$bdd = new PDO('mysql:host=localhost;dbname=vietsaf;charset=utf8', 'root', '');
} catch (Exception $e) {
	die('Erreur : ' . $e->getMessage());
}
// On regarde si le pseudo est pas déjà pris par quelqu'un d'autre
$req = $bdd->prepare('SELECT email FROM membres WHERE email = ?');
$req->execute(array($_POST['email']));
$resultat = $req->fetch();
// Aucune erreur par défaut
$error_emailDuplicate = FALSE;
$error_motDePasse = FALSE;
$error_motDePasse_conditions = FALSE;
$error_telephone = FALSE;
$error_emailWorng = FALSE;
$role_utilisateur = 0;
// Le pseudo est déjà utilisé
if ($resultat) {
	// Il y a donc une erreur
	$error_pseudo = TRUE;
	header('Location: admin_client_creation.php?error_emailDuplicate=' . $error_emailDuplicate);
}
// On regarde si le mot de passe est conforme au format attendu
else if (!preg_match("#^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}$#", $_POST['motDePasse'])) {
	// Le mot de passe n'est pas conforme donc il y a une erreur
	$error_motDePasse_conditions = TRUE;
	header('Location: admin_client_creation.php?error_motDePasse_conditions=' . $error_motDePasse_conditions);
}
// On regarde si le téléphone est conforme au format attendu
else if (!preg_match("#^0[1-8]([-. ]?[0-9]{2}){4}$#", $_POST['telephone'])) {
	// Le téléphone n'est pas conforme donc il y a une erreur
	$error_telephone = TRUE;
	header('Location: admin_client_creation.php?error_telephone=' . $error_telephone);
}
// On regarde si l'adresse mail est conforme au format attendu
else if (!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email'])) {
	// L'adresse mail n'est pas conforme donc il y a une erreur
	$error_emailWorng = TRUE;
	header('Location: admin_client_creation.php?error_emailWorng=' . $error_emailWorng);
}
// Jusque-là tout est conforme
else {
	// On vérifie que les deux mots de passe sont identiques
	if ($_POST['motDePasse'] == $_POST['motDePasse_check']) {
		// On crypte le mot de passe			
		$pass_hache = password_hash($_POST['motDePasse'], PASSWORD_DEFAULT);
		// On ajoute le nouvel utilisateur dans la BDD
		$req = $bdd->prepare('INSERT INTO membres (prenom, nom, email, mot_de_passe, telephone, role_utilisateur) VALUES(?, ?, ?, ?, ?, ?)');
		$req->execute(array($_POST['prenom'], $_POST['nom'], $_POST['email'], $pass_hache, $_POST['telephone'], $role_utilisateur));
		// On récupère l'identifiant du nouvel utilisateur
		$req = $bdd->prepare('SELECT id_utilisateur, role_utilisateur FROM membres WHERE email = ?');
		$req->execute(array($_POST['pseudo_user']));
		$resultat = $req->fetch();
		// On crée une session pour le nouvel utilisateur
		session_start();
		$_SESSION['id_utilisateur'] = $resultat['id_utilisateur'];
		$_SESSION['role_utilisateur'] = $resultat['role_utilisateur'];
		header('Location: page_homepage.php');
	}
	// Les deux mot de passe sont différents
	else {
		// Il y a donc une erreur
		$error_password = TRUE;
		header('Location: admin_client_creation.php?error_motDePasse=' . $error_motDePasse);
	}
}