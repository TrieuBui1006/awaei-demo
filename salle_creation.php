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
    <link rel="icon" type="image/png" href="../img/logo.jpg" />

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
                <form method="post" action="salle_creation_controller.php">
                    <div class="container">
                        <h1>Create une nouvelle salle</h1>
                        <p>Veuillez remplir ce formulaire pour créer une salle.</p>

                        <label for="nom_salle"><b>Nom de Salle <span style="color: red;">*</span></b></label>
                        <input type="text" placeholder="Entrez Nom de Salle" name="nom_salle" required />

                        <input type="checkbox" id="tempSalle" name="tempSalle" value="true">
                        <label for="tempSalle"> Capteur Temp de Salle </label><br>

                        <input type="checkbox" id="tempEau" name="tempEau" value="true">
                        <label for="tempEau"> Capteur Temp de l'eau </label><br>

                        <input type="checkbox" id="lumiere" name="lumiere" value="true">
                        <label for="lumiere"> Controlle de lumiere </label><br><br>

                        <input type="checkbox" id="radiateur" name="radiateur" value="true">
                        <label for="radiateur"> Controlle de Radiateur </label><br><br>

                        <input type="checkbox" id="eauChaude" name="eauChaude" value="true">
                        <label for="eauChaude"> Controlle de l'Eau Chaude </label><br><br>

                        <div class="clearfix">
                            <button type="submit">Submit</button>
                        </div>
                    </div>
                </form>

            </section>

        </main>
    </section>

    <!------------------------------------Body - END------------------------------------------>

</body>

</html>