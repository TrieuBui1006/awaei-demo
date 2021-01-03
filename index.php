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
        <video src='./video/SmartHome.mp4' autoPlay loop muted></video>
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
            Bienvenue sur Vietsaf. Choisissez la bonne température. La bonne humeur. Même le bon cycle de lavage.
            Tout à partir d'ici.
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
                    L'entreprise a été fondée par un groupe de quatre amis qui ont étudié à l'INSA Centre Val de Loire.
                    Dans le but d'apporter le plus de confort à chaque maison grâce à l'application des technologies
                    4.0.
                </p>
                <br>
                <p>
                    Avec de nombreuses années d'expérience dans le conseil en logement ainsi que dans le développement
                    de l'IOT et de systèmes Web. Nous nous engageons à offrir une expérience intelligente et confortable
                    à nos clients.
                </p>
                <br>
                <p>
                    Nous fournissons des services de contrôle de la maison intelligente ainsi que le courtage de maisons
                    intelligentes et l'installation de systèmes.
                </p>
            </div>
            <div class="box-present">
                <img src="./img/mainpage/quiSommesNous.jpg" alt="present-img">
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
                    <img src="./img/mainpage/service1.png" alt="box-service-img">
                </div>
                <div class="box-service-content">
                    Courtier immobilier
                </div>
            </div>
            <div class="box-service">
                <div class="box-service-img">
                    <img src="./img/mainpage/service2.png" alt="box-service-img">
                </div>
                <div class="box-service-content">
                    Installer le système
                </div>
            </div>
            <div class="box-service">
                <div class="box-service-img">
                    <img src="./img/mainpage/service3.png" alt="box-service-img">
                </div>
                <div class="box-service-content">
                    Fournir des services logiciels
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
            <input type="email" name="email" required="required">
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
                                <p>The Nest Hello has the best video quality and HDR support. En outre,
                                    cela s'intègre à Google Ecosystème. Il enregistre tout, 24/7. Vous pouvez le
                                    connecter à l'application que vous pouvez contrôler avec votre téléphone.
                                    Nest Hello traite la sonnette comme un système de sécurité normal.</p>
                            </div>
                        </div>
                        <div class="slide slide_2">
                            <div class="slide-content">
                                <p>Networking Hub est centralisé. Avec Philips Hue Hub et smartthings hub.
                                    Home Run héberge également le routeur Wi-Fi. Le réseau maillé est amplifié HD.</p>
                            </div>
                        </div>
                        <div class="slide slide_3">
                            <div class="slide-content">
                                <p>Caméra de sécurité a un agent en direct de l'autre côté qui vérifie chaque
                                    mouvement. De plus, s'il y a une menace quelconque, ils réagissent en adressant un
                                    avertissement
                                    à l'intrus et ils appelleront également la police.</p>
                            </div>
                        </div>
                        <div class="slide slide_4">
                            <div class="slide-content">
                                <p>I love you Mr.Bavencoffe.</p>
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
            <img src="./img/mainpage/label1.png" alt="collaboration">
            <img src="./img/mainpage/label2.png" alt="collaboration">
            <img src="./img/mainpage/label3.png" alt="collaboration">
            <img src="./img/mainpage/label4.png" alt="collaboration">
            <img src="./img/mainpage/label5.png" alt="collaboration">
            <img src="./img/mainpage/label6.png" alt="collaboration">
            <img src="./img/mainpage/label7.png" alt="collaboration">
            <img src="./img/mainpage/label8.png" alt="collaboration">
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