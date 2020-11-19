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
    <title>VIETSAF - Se Connecter</title>
</head>

<body id="mainpage">
    <!------------------------------- HEADER - START ------------------------------------------>
    <?php
    require_once('utils/header.php');
    ?>
    <!--------------------------------- HEADER - END ------------------------------------>

    <!--SignIn-->
    <section id="wrapper-signin">
        <div class="formBx">
            <form name="login-form" class="login-form" action="seConnecter_controller.php" method="post">
                <h1>SE CONNECTER</h1>

                <div class="content-login">
                    <div class="inputBox">
                        <input type="text" name="email" required="required" />
                        <span>Email</span>
                    </div>

                    <div class="inputBox">
                        <input type="password" name="mot_de_passe" required="required" />
                        <span>Mot de Passe</span>
                    </div>
                </div>
                <div class="button-login">
                    <button class="submit-btn" type="submit">Se Connecter</button>
                    <a href="sinscrire.php">S'inscrire</a>
                </div>
                <!-- Si la connexion n'a pas fonctionné -->
                <?php
                if (isset($_GET['error']) && $_GET['error'] == TRUE) {
                ?>
                <p>Mauvais identifiant ou mot de passe !</p>
                <?php
                }
                ?>
            </form>
        </div>

        <div class="imgBx">
            <img src="img/signin/girl.png" alt="image">
        </div>
    </section>

    <!--footer-->
    <?php
    require_once('utils/footer.php');
    ?>

</body>

</html>