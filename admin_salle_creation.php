<?php
session_start();
if (!isset($_SESSION['id_utilisateur'])) {
    $_SESSION['id_utilisateur'] = false;
    header('Location: page_homepage.php');
}
if ($_SESSION['role_utilisateur'] != 1 || !$_SESSION['id_utilisateur']) {
    header('Location: page_homepage.php');
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
                <form method="post" action="admin_salle_creation_controller.php">
                    <div class="container">
                        <h2>Creation de salle</h2>
                        <p>Veuillez remplir ce formulaire pour créer une salle.<br>Comming soon !</p>

                        <label for="nom_salle"><b>Nom de Salle <span style="color: red;">*</span></b></label>
                        <input type="text" placeholder="Entrez Nom de Salle" name="nom_salle" required />

                        <div class="switch-content">
                            <label class="switch-titre" for="tempSalle"><b>Capteur Temp de Salle:</b></label>
                            <label class="switch">
                                <input type="checkbox" name="tempSalle">
                                <span class="slider round"></span>
                            </label>
                        </div>

                        <div class="switch-content">
                            <label class="switch-titre" for="tempEau"><b>Capteur Temp de l'eau:</b></label>
                            <label class="switch">
                                <input type="checkbox" name="tempEau">
                                <span class="slider round"></span>
                            </label>
                        </div>

                        <div class="switch-content">
                            <label class="switch-titre" for="lumiere"><b>Controlle de lumiere:</b></label>
                            <label class="switch">
                                <input type="checkbox" name="lumiere">
                                <span class="slider round"></span>
                            </label>
                        </div>

                        <div class="switch-content">
                            <label class="switch-titre" for="radiateur"><b>Controlle de Radiateur:</b></label>
                            <label class="switch">
                                <input type="checkbox" name="radiateur">
                                <span class="slider round"></span>
                            </label>
                        </div>

                        <div class="switch-content">
                            <label class="switch-titre" for="eauChaude"><b>Controlle de l'Eau Chaude:</b></label>
                            <label class="switch">
                                <input type="checkbox" name="eauChaude">
                                <span class="slider round"></span>
                            </label>
                        </div>

                        <div class="clearfix">
                            <button type="submit" disabled>Enregistrer</button>
                        </div>
                    </div>
                </form>

            </section>

        </main>
    </section>

    <!------------------------------------Body - END------------------------------------------>

</body>

</html>