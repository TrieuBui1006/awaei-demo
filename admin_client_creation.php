<?php
session_start();
if (!isset($_SESSION['id_utilisateur'])) {
    $_SESSION['id_utilisateur'] = false;
    header('Location: index.php');
}
if ($_SESSION['role_utilisateur'] != 1 || !$_SESSION['id_utilisateur']) {
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://kit.fontawesome.com/58cdc139df.js" crossorigin="anonymous"></script>
    <!--LogoPage-->
    <link rel="icon" type="image/png" href="img/logo/logo2.png" />

    <link rel="stylesheet" href="css/style.css" />
    <title>Les Viets - Salle Creation</title>
</head>

<body id="mainpage">
    <!------------------------------- HEADER - START ------------------------------------------>
    <?php
    require_once('utils/header.php');
    ?>
    <!----------------------------------- HEADER - END ---------------------------------------->

    <!------------------------------------Body - START------------------------------------------>

    <section class="mon-compte">
        <input type="checkbox" id="check-compte">
        <label for="check-compte">
            <i class="fas fa-bars toogle"></i>
        </label>

        <?php
        require_once('utils/adminNavbar.php');
        ?>

        <main>
            <section class="signup">
                <form method="post" action="admin_client_creation_controller.php">
                    <div class="container">
                        <h2>CREATION DE CLIENT</h2>
                        <p>Veuillez remplir ce formulaire pour créer un compte.</p>

                        <div class="input-box">
                            <div>
                                <label for="prenom"><b>Prénom <span style="color: red;">*</span></b></label>
                                <input type="text" placeholder="Prénom" name="prenom" required />
                            </div>
                            <div>
                                <label for="nom"><b>Nom <span style="color: red;">*</span></b></label>
                                <input type="text" placeholder="Nom" name="nom" required />
                            </div>
                        </div>
                        <div class="input-box">
                            <div>
                                <label for="telephone"><b>Téléphone <span style="color: red;">*</span></b></label>
                                <input type="tel" placeholder="Entrez Numéro de Téléphone" name="telephone" required />
                            </div>
                            <div>
                                <label for="email"><b>Email <span style="color: red;">*</span></b></label>
                                <input type="email" placeholder="Entrez Email" name="email" required />
                            </div>
                        </div>
        
                        <!-- <label for="rp-email"><b>Repeat Email</b></label>
                <input type="email" placeholder="Repeat Email" name="rp-email" required /> -->

                        <label for="motDePasse"><b>Mot De Passe <span style="color: red;">*</span></b></label>
                        <input type="password" placeholder="Entrez Mot De Passe" name="motDePasse" required />

                        <label for="motDePasse_check"><b>Répéter Mot De Passe <span
                                    style="color: red;">*</span></b></label>
                        <input type="password" placeholder="Entrer Mot De Passe" name="motDePasse_check" required />

                        <label>
                            <input type="checkbox" checked="checked" name="remember" style="margin-bottom: 15px">En
                            créant
                            un
                            compte, vous acceptez </input>
                            <a href="#" style="color: dodgerblue">nos conditions et notre confidentialité</a>.
                        </label>

                        <div class="clearfix">
                            <button type="submit">S'inscrire</button>
                        </div>
                    </div>
                </form>

                <?php
                // Si le pseudo est déjà utilisé par un autre utilisateur
                if (isset($_GET['error_emailDuplicate']) && $_GET['error_emailDuplicate'] == TRUE) {
                ?>
                <p>Cet email est déjà utilisé !</p>
                <?php
                }
                // Si les deux mots de passe écrits sont différents
                if (isset($_GET['error_motDePasse']) && $_GET['error_motDePasse'] == TRUE) {
                ?>
                <p>Les deux mots de passe que vous avez écrits étaient différents !</p>
                <?php
                }
                // Si l'adresse e-mail saisie n'est pas valide
                if (isset($_GET['error_emailWorng']) && $_GET['error_emailWorng'] == TRUE) {
                ?>
                <p>L'adresse e-mail que vous avez entrée n'est pas valide !</p>
                <?php
                }
                // Si le numéro de téléphone n'est pas valide
                if (isset($_GET['error_telephone']) && $_GET['error_telephone'] == TRUE) {
                ?>
                <p>Le numéro de téléphone que vous avez entré n'est pas valide !</p>
                <?php
                }
                // Si le mot de passe ne respecte pas les conditions requises
                if (isset($_GET['error_password_conditions']) && $_GET['error_password_conditions'] == TRUE) {
                ?>
                <p>Le mot de passe que vous avez choisi n'est pas valide !</p>
                <p>Il doit contenir au moins 8 caractères avec au moins :
                <ul>
                    <li>Une majuscule</li>
                    <li>Une minuscule</li>
                    <li>Un chiffre</li>
                </ul>
                <?php
                }
                    ?>
            </section>

        </main>
    </section>

</body>

</html>