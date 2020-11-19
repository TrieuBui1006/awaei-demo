<?php
session_start();
if (!isset($_SESSION['id_utilisateur'])) {
    $_SESSION['id_utilisateur'] = false;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://kit.fontawesome.com/58cdc139df.js" crossorigin="anonymous"></script>
    <!--LogoPage-->
    <link rel="icon" type="image/png" href="../img/logo.jpg" />

    <link rel="stylesheet" href="css/style.css" />
    <title>Les Viets - S'inscrire</title>
</head>

<body id="mainpage">
    <!------------------------------- HEADER - START ------------------------------------------>
    <?php
    require_once('utils/header.php');
    ?>
    <!--------------------------------- HEADER - END ------------------------------------>

    <!--SignUp-->
    <section class="signup">
        <form method="post" action="sinscrire_controller.php">
            <div class="container">
                <h1>Register</h1>
                <p>Please fill in this form to create an account.</p>

                <div class="input-box">
                    <div>
                        <label for="prenom"><b>Prenom</b></label>
                        <input type="text" placeholder="Prenom" name="prenom" required />
                    </div>
                    <div>
                        <label for="nom"><b>Nom</b></label>
                        <input type="text" placeholder="Nom" name="nom" required />
                    </div>
                </div>

                <label for="telephone"><b>Telephone</b></label>
                <input type="tel" placeholder="Entrez Numero Telephone" name="telephone" required />

                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Entrez Email" name="email" required />

                <!-- <label for="rp-email"><b>Repeat Email</b></label>
                <input type="email" placeholder="Repeat Email" name="rp-email" required /> -->

                <label for="motDePasse"><b>Mot De Passe</b></label>
                <input type="password" placeholder="Entrez Mot De Passe" name="motDePasse" required />

                <label for="motDePasse_check"><b>Rentrez Mot De Passe</b></label>
                <input type="password" placeholder="Enter Mot De Passe" name="motDePasse_check" required />

                <label>
                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom: 15px" />By creating
                    an account you agree to our
                    <a href="#" style="color: dodgerblue">Terms & Privacy</a>.
                </label>

                <div class="clearfix">
                    <button type="submit">Register</button>
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

    <!--footer-->
    <?php
    require_once('utils/footer.php');
    ?>
</body>

</html>