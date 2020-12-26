<?php
session_start();
if (!isset($_SESSION['id_utilisateur'])) {
    $_SESSION['id_utilisateur'] = false;
    header('Location: index.php');
}
if ($_SESSION['role_utilisateur'] != 0 || !$_SESSION['id_utilisateur']) {
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
    <script src="./node_modules/plotly.js-dist/plotly.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Les Viets - Cuisine</title>
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
        require_once('utils/monCompteNavbar.php');
        ?>

        <main>
            <section class="description-salle">
                <h1 style="margin: 20px 0">Mon Cuisine</h1>
                <div class="content-main-salle">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit dolore, officiis vel quam ut earum asperiores numquam eligendi enim praesentium?
                </div>
                <div class="content-salle">
                    <img src="./img/salon.jpg" alt="salle">
                    <div class="box-salle">
                        <div class="degree">
                            30C
                        </div>
                        <div class="text-supp">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, nobis?
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non voluptatum porro sunt voluptate autem saepe, blanditiis distinctio quod numquam, dicta eum cupiditate. Dolor veritatis porro distinctio fuga praesentium quae maiores.
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </section>

    <!------------------------------------Body - END------------------------------------------>

</body>

</html>