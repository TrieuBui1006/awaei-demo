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

    <link rel="stylesheet" href="css/stylee.css" />
    <title>VIETSAF - Accueil</title>
</head>

<body id="mainpage">

    <!------------------------------- HEADER - START ------------------------------------------>
    <?php
    require_once('utils/header.php');
    ?>
    <!--------------------------------- HEADER - END ------------------------------------>

    <!-------------------------------- banner ------------------------------------------->
    <section class="banner">
        <video src='./video/SmartHome.mp4' autoPlay loop muted ></video>
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
                <?php if ($_SESSION['id_utilisateur'] == false) : ?>
                <div>
                    <a href="seConnecter.php">Sign In</a>
                </div>
                <div>
                    <a href="info.php">Contact</a>
                </div>
            </div>
            <?php endif; ?>
            <?php if ($_SESSION['id_utilisateur'] == true) : ?>
            <div>
                <a href="monCompte.php">Connecter</a>
            </div>
            <?php endif; ?>
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
        <h2>Review</h2>
        <i class="fas fa-quote-left review-comment"></i>
        <div id="slider">
            <input type="radio" name="slider" id="slide1" checked>
            <input type="radio" name="slider" id="slide2">
            <input type="radio" name="slider" id="slide3">
            <input type="radio" name="slider" id="slide4">
            <div id="slides">
                <div id="overflow">
                    <div class="inner">
                        <div class="slide slide_1">
                        <div class="slide-content">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam, eius? Consequuntur cumque quo alias excepturi quia adipisci porro facilis eaque, corporis, natus culpa animi, nihil aliquid cupiditate inventore amet? Perspiciatis.</p>
                        </div>
                        </div>
                        <div class="slide slide_2">
                        <div class="slide-content">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit quos itaque corrupti ipsam? Fugit, dolorem.</p>
                        </div>
                        </div>
                        <div class="slide slide_3">
                        <div class="slide-content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, doloribus saepe facere fugiat beatae non reprehenderit?</p>
                        </div>
                        </div>
                        <div class="slide slide_4">
                        <div class="slide-content">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga vero eligendi aliquid quis iste?</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="controls">
                <label for="slide1"></label>
                <label for="slide2"></label>
                <label for="slide3"></label>
                <label for="slide4"></label>
            </div>
            <div id="bullets">
                <label for="slide1"></label>
                <label for="slide2"></label>
                <label for="slide3"></label>
                <label for="slide4"></label>
            </div>
        </div>
    </section>
    <!--------------------------------- review ------------------------------------------>

    <!--------------------------------- footer ------------------------------------------>
    <?php
    require_once('utils/footer.php');
    ?>
    <!--------------------------------- footer ------------------------------------------>

</body>

</html>