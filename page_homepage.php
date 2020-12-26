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
    require_once('utils/header.php');
    ?>
    <!--------------------------------- HEADER - END ------------------------------------>

    <!--- banner--->
    <section class="banner">
        <video src='./video/SmartHome.mp4' autoPlay loop muted ></video>
        <div class="content">
            <div class="intro">
                <h2>Bienvenue <br />Nous sommes <span>VIETSAF</span></h2>
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
                    <a href="page_seConnecter.php">Sign In</a>
                </div>
                <div>
                    <a href="page_infomation.php">Contact</a>
                </div>
            </div>
            <?php endif; ?>
            <?php if ($_SESSION['id_utilisateur'] == true) : ?>
            <div>
                <a href="page_monCompte.php">Mon Compte</a>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <!--- banner --->

    <!--- introduction --->
    <section class="introduction">
        <h1 class="header-intro">Overview</h1>
        <div class="body-intro">
            Welcome to SmartThings. Choose the right temperature. The right mood. Even the right wash cycle. All from right here.
        </div>
        <a href="page_infomation.php" class="button-intro">Contact</a>
    </section>
    <!--- introduction --->

    <!--- present --->
    <section class="present">
        <h1>Qui sommes nous?</h1>
        <div class="content-present">
            <div class="box-present">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla delectus animi fuga odit deleniti ex.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos debitis aliquam quidem libero mollitia nemo?
                </p>
                <br>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. A eaque dolore cumque assumenda, qui nulla.
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque quis asperiores nulla commodi, esse aspernatur.
                </p>
                <br>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga assumenda sunt modi beatae quae iure?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aspernatur nihil tenetur. Sapiente, dignissimos earum.
                </p>
            </div>
            <div class="box-present">
                <img src="./img/intro/wifi.png" alt="present-img">
            </div>
        </div>
    </section>
    <!--- present --->

    <!--- service --->
    <section class="service">
        <h1>Service</h1>
        <div class="content-service">
            <div class="box-service">
                <div class="box-service-img">
                    <img src="./img/intro/wifi.png" alt="box-service-img">
                </div>
                <div class="box-service-content">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis distinctio maiores ut necessitatibus illo eos.
                </div>
            </div>
            <div class="box-service">
                <div class="box-service-img">
                    <img src="./img/intro/wifi.png" alt="box-service-img">
                </div>
                <div class="box-service-content">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis distinctio maiores ut necessitatibus illo eos.
                </div>
            </div>
            <div class="box-service">
                <div class="box-service-img">
                    <img src="./img/intro/wifi.png" alt="box-service-img">
                </div>
                <div class="box-service-content">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis distinctio maiores ut necessitatibus illo eos.
                </div>
            </div>
        </div>
    </section>
    <!--- service --->

    <!--- newsletter --->
    <section class="newsletter">
        <div class="content-news">
            <h2>Recevoir la newsletter</h2>
            <p>Revevez une fois par mois (maximum) l'actualité de Vietsaf</p>
        </div>
        <div class="box-news">
            <input type="email" name="email" required="required" >
            <button>GO !</button>
        </div>
    </section>
    <!--- newsletter --->

    <!--- review --->
    <section class="review">
        <h1>Review</h1>
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
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ladipisci porro facilis eaque, corporis, natus culpa animi, nihil aliquid cupiditate inventore amet? Perspiciatis.</p>
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
    <!--- review--->

    <!--- collaborateur --->
    <section class="collaborateur">
        <h1>Collaborateurs</h1>
        <div class="content-colla">
            <img src="./img/intro/wifi.png" alt="collaboration">
            <img src="./img/intro/wifi.png" alt="collaboration">
            <img src="./img/intro/wifi.png" alt="collaboration">
            <img src="./img/intro/wifi.png" alt="collaboration">
            <img src="./img/intro/wifi.png" alt="collaboration">
            <img src="./img/intro/wifi.png" alt="collaboration">
            <img src="./img/intro/wifi.png" alt="collaboration">
            <img src="./img/intro/wifi.png" alt="collaboration">
        </div>
    </section>
    <!--- collaborateur --->

    <!--- footer --->
    <?php
    require_once('utils/footer.php');
    ?>
    <!--- footer --->

</body>

</html>