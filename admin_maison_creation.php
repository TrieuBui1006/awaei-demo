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
    <title>Les Viets - Maison Creation</title>
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
                <form method="post" action="admin_maison_creation_controller.php">
                    <div class="container">
                        <h2>Creation de maison</h2>
                        <p>Veuillez remplir ce formulaire pour créer une maison.<br>Comming soon !</p>

                        <label for="nom_maison"><b>Nom de Maison <span style="color: red;">*</span></b></label>
                        <input type="text" placeholder="Entrez Nom de Maison" name="nom_maison" required />

                        <label for="nb_chambre"><b>Nombre de Chambres <span style="color: red;">*</span></b></label>
                        <input type="number" value="1" name="nb_chambre" required min="1" step="1" plac />

                        <div class="switch-content">
                            <label class="switch-titre" for="salon"><b>Salon:</b></label>
                            <label class="switch">
                                <input type="checkbox" name="salon">
                                <span class="slider round"></span>
                            </label>
                        </div>

                        <div class="switch-content">
                            <label class="switch-titre" for="cuisine"><b>Cuisine:</b></label>
                            <label class="switch">
                                <input type="checkbox" name="cuisine">
                                <span class="slider round"></span>
                            </label>
                        </div>

                        <div class="switch-content">
                            <label class="switch-titre" for="garage"><b>SdB:</b></label>
                            <label class="switch">
                                <input type="checkbox" name="garage">
                                <span class="slider round"></span>
                            </label>
                        </div>

                        <div class="switch-content">
                            <label class="switch-titre" for="garage"><b>Garage:</b></label>
                            <label class="switch">
                                <input type="checkbox" name="garage">
                                <span class="slider round"></span>
                            </label>
                        </div>

                        <div class="switch-content">
                            <label class="switch-titre" for="couloir"><b>Couloir:</b></label>
                            <label class="switch">
                                <input type="checkbox" name="couloir">
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