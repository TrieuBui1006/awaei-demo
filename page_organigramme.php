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
    <title>VIETSAF - Organigramme</title>
</head>

<body id="mainpage">
    <!------------------------------- HEADER - START ------------------------------------------>
    <?php
    require_once('utils/header.php');
    ?>
    <!--------------------------------- HEADER - END ------------------------------------>

    <!--banner-organization-->
    <section class="banner-organization">
        <div class="banner"></div>
        <h2>Equipe & Partenaires</h2>
    </section>

    <!--intro-project-->
    <!-- Dung lai present cua accueil -->
    <section class="present">
        <h1>Découvrez notre projet</h1>
        <div class="content-present">
            <div class="box-present">
                <p>
                    Réalisation d’un banc expérimental de mesure de température et de contrôle de l’électricité par
                    protocole Modbus
                </p>
                <br>
                <p>
                    Pour réaliser cette mission une partie du matériel a été fournie par l’école. Celui-ci se composait
                    de :
                </p>
                <ul>
                    <li>Un automate AT3100 de marque AIM possédant les ports suivants : port Ethernet, port RS485 et le
                        port d’alimentation;</li>
                    <li>Une carte de communication AIM C0800, cette carte comporte un port Ethernet ainsi qu’un port
                        spécifique à la communication des modules AIM. Ce port a pour but la communication des
                        différentes informations sur les modules complémentaires;</li>
                    <li>Un module AIM 6PT24 avec un port de communication spécifique AIM, permettant la connexion de
                        sonde de température de type PT100 3 fils;</li>
                    <li>Un switch D-Link 16 ports, permettant de relier les différents composants (ordinateur, automates
                        programmables et les différents modules) entre eux.</li>
                </ul>
                <br>
                <p>Des logiciels m’ont aussi été fournis avec l’automate</p>
                <ul>
                    <li>Le logiciel de programmation graphique propriétaire de l’automate : Agilia;</li>
                    <li>Le logiciel Network Manager permettant la configuration des différents éléments (Automate et
                        convertisseur de la marque AIM);</li>
                    <li>Le logiciel de simulateur de serveur, WAMP server ;</li>
                    <li>Le logiciel de développement du langage HTML et PHP : VS Code.</li>
                </ul>
                <br>
                <p>
                    Dans un premier temps l’information température devait être envoyée par protocole Ethernet et
                    pilotée par protocole Modbus. Cette partie appelée «mode instantané» permet cette communication.
                    Ainsi ce mode permet la visualisation de la température sur une page web pour une communication des
                    sondes vers l’ordinateur et la visualisation sur la dalle tactile de l’automate pour une
                    communication des sondes vers l’automate. Dans un second temps, et dans une optique d’amélioration,
                    l’information température devait être stockée dans la mémoire de l’automate puis envoyée à une base
                    de données. Cette partie appelée «mode automatique» est bien entamée mais malheureusement non
                    opérationnelle. La partie programmation de l’automate est finie, cependant, la partie PHP est quant
                    à elle inachevée. 5 La sélection entre les deux modes sur la page web se fait via un menu à deux
                    choix. Étant donné que seul le mode instantané fonctionne, les deux choix amènent exclusivement vers
                    celui-ci. En ce qui concerne l’automate, un menu est aussi disponible sur la page d’accueil. Le
                    choix du mode automatique emmène l’utilisateur sur la «page automatique» mais celle-ci reste
                    statique.
                </p>
            </div>
            <div class="box-present">
                <img src="./img/intro/wifi.png" alt="present-img">
            </div>
        </div>
    </section>

    <!--intro-tutor-->
    <!-- Dung lai present cua accueil -->
    <section class="present">
        <h1>Notre Tuteur</h1>
        <div class="content-present">
            <div class="box-present">
                <img src="./img/intro/wifi.png" alt="present-img">
            </div>
            <div class="box-present">
                <p>
                    Maxime BAVENCOFFE
                </p>
                <p>
                    Maître de Conférences
                </p>
                <p>INSA Centre Val de Loire - Campus de Blois</p>
            </div>
        </div>
    </section>

    <!--intro-equipe-->
    <section class="equipe-organization">
        <h1>Notre Équipe</h1>
        <div class="content-equipe-organization">
            Un groupe de 4 étudiants vietnamiens de dernière année option ACAD de l'INSA Centre Val de Loire
        </div>
        <div class="members-equipe-organization">
            <div class="content-member">
                <p>BUI Duc Trieu</p>
                <span>Directeur</span>
                <div class="img-member">
                    <img src="./img/intro/intro1.jpg" alt="TrieuBui">
                </div>
            </div>
            <div class="content-member">
                <p>NGUYEN Huynh Dung</p>
                <span>Directeur</span>
                <div class="img-member">
                    <img src="./img/intro/intro1.jpg" alt="TrieuBui">
                </div>
            </div>
            <div class="content-member">
                <p>LE Quang Quoc Bao</p>
                <span>Directeur</span>
                <div class="img-member">
                    <img src="./img/intro/intro1.jpg" alt="TrieuBui">
                </div>
            </div>
            <div class="content-member">
                <p>LE Quang Linh</p>
                <span>Directeur</span>
                <div class="img-member">
                    <img src="./img/intro/intro1.jpg" alt="TrieuBui">
                </div>
            </div>
        </div>
    </section>

    <section class="cooperation">
        <div class="banner1"></div>
        <div class="banner2"></div>
        <div class="banner3"></div>
        <div class="banner4"></div>
        <div class="banner5"></div>
        <h2>Coopérer avec nous</h2>
    </section>

    <!--footer-->
    <?php
    require_once('utils/footer.php');
    ?>
</body>

</html>