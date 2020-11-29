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

    <link rel="stylesheet" href="css/styles.css" />
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
                <form method="post" action="maison_creation_controller.php">
                    <div class="container">
                        <h1>Create une nouvelle salle</h1>
                        <p>Veuillez remplir ce formulaire pour créer une salle.</p>

                        <label for="nom_maison"><b>Nom de Maison <span style="color: red;">*</span></b></label>
                        <input type="text" placeholder="Entrez Nom de Maison" name="nom_maison" required />

                        <input type="checkbox" id="tempSalle" name="salon" value="true">
                        <label for="salon"> Salon </label><br>

                        <label for="nb_chambre"><b>Nombre de Chambres <span style="color: red;">*</span></b></label>
                        <input type="number" placeholder="Entrez Nombre de Chambres" name="nb_chambre" required />

                        <input type="checkbox" id="cuisine" name="cuisine" value="true">
                        <label for="cuisine"> Cuisine </label><br><br>

                        <label for="nb_sdb"><b>Nombre de Salles de Bain <span style="color: red;">*</span></b></label>
                        <input type="number" placeholder="Entrez Nombre de Salles de Bain" name="nb_sdb" required />

                        <input type="checkbox" id="garage" name="garage" value="true">
                        <label for="garage"> Garage </label><br><br>

                        <input type="checkbox" id="couloir" name="couloir" value="true">
                        <label for="couloir"> Couloir </label><br><br>

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