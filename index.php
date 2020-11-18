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
    <link rel="icon" type="image/png" href="img/logo/logo2.png" />

    <link rel="stylesheet" href="css/style.css" />
    <title>VIETSAF - Accueil</title>
</head>

<body id="mainpage">

    <!------------------------------- HEADER - START ------------------------------------------>
    <?php
    require_once('/xampp/htdocs/awei-demo/utils/header.php');
    ?>
    <!--------------------------------- HEADER - END ------------------------------------>

    <!-------------------------------- banner ------------------------------------------->
    <section class="banner">
        <div class="content">
            <div class="intro">
                <h1>Bienvenue <br />Nous sommes <span>VIETSAF</span></h1>
                <div class="animate-text">
                    <span style="--i: 1">S</span>
                    <span style="--i: 2">M</span>
                    <span style="--i: 3">A</span>
                    <span style="--i: 4">R</span>
                    <span style="--i: 5">T</span>
                    <span style="--i: 6">&nbsp;</span>
                    <span style="--i: 7">M</span>
                    <span style="--i: 8">A</span>
                    <span style="--i: 9">I</span>
                    <span style="--i: 10">S</span>
                    <span style="--i: 11">O</span>
                    <span style="--i: 12">N</span>
                </div>
            </div>
            <div class="signinup">
                <div>
                    <a href="SignIn.html">Sign In</a>
                </div>
                <div>
                    <a href="SignUp.html">Sign Up</a>
                </div>
            </div>
        </div>
    </section>
    <!-------------------------------- banner ------------------------------------------->

    <!-------------------------------- introduction ------------------------------------->
    <section class="introduction">
        <h1>Introduction</h1>
        <div class="background-intro">
            <img src="img/intro/intro1.jpg" alt="image1" />
        </div>
        <div class="content-intro">
            <div class="box-intro">
                <img src="img/intro/intro2.jpg" alt="img2" />
                <div class="description">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Consequatur nostrum numquam voluptatem debitis odit nisi, cum sit
                    ipsa consequuntur minus eius doloribus obcaecati corporis
                    exercitationem deserunt suscipit quis veritatis aspernatur.
                </div>
            </div>
            <div class="box-intro">
                <img src="img/intro/intro3.jpg" alt="img3" />
                <div class="description">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Consequatur nostrum numquam voluptatem debitis odit nisi, cum sit
                    ipsa consequuntur minus eius doloribus obcaecati corporis
                    exercitationem deserunt suscipit quis veritatis aspernatur.
                </div>
            </div>
            <div class="box-intro">
                <img src="img/intro/intro4.jpg" alt="img4" />
                <div class="description">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Consequatur nostrum numquam voluptatem debitis odit nisi, cum sit
                    ipsa consequuntur minus eius doloribus obcaecati corporis
                    exercitationem deserunt suscipit quis veritatis aspernatur.
                </div>
            </div>
        </div>
    </section>
    <!-------------------------------- introduction ------------------------------------->

    <!--------------------------------- review ------------------------------------------>
    <section class="review">
        <h1>Review</h1>
        <div class="content-review">
            <div class="box-review">
                <img src="img/intro/intro2.jpg" alt="img2" />
                <div class="text-review">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Consequatur nostrum numquam voluptatem debitis odit nisi, cum sit
                    ipsa consequuntur minus eius doloribus obcaecati corporis
                    exercitationem deserunt suscipit quis veritatis aspernatur.
                </div>
            </div>
            <div class="box-review">
                <img src="img/intro/intro3.jpg" alt="img3" />
                <div class="text-review">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Consequatur nostrum numquam voluptatem debitis odit nisi, cum sit
                    ipsa consequuntur minus eius doloribus obcaecati corporis
                    exercitationem deserunt suscipit quis veritatis aspernatur.
                </div>
            </div>
            <div class="box-review">
                <img src="img/intro/intro4.jpg" alt="img4" />
                <div class="text-review">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Consequatur nostrum numquam voluptatem debitis odit nisi, cum sit
                    ipsa consequuntur minus eius doloribus obcaecati corporis
                    exercitationem deserunt suscipit quis veritatis aspernatur.
                </div>
            </div>
        </div>
    </section>
    <!--------------------------------- review ------------------------------------------>

    <!--------------------------------- footer ------------------------------------------>
    <?php
    require_once('/xampp/htdocs/awei-demo/utils/footer.php');
    ?>
    <!--------------------------------- footer ------------------------------------------>

</body>

</html>