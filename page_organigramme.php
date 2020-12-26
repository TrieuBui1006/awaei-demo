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
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla delectus animi fuga odit deleniti ex.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos debitis aliquam quidem libero mollitia nemo?
                </p>
                <br>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. A eaque dolore cumque assumenda, qui nulla.
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque quis asperiores nulla commodi, esse aspernatur.
                </p>
                <br>
            </div>
        </div>
    </section>

    <!--intro-equipe-->
    <section class="equipe-organization">
        <h1>Notre Équipe</h1>
        <div class="content-equipe-organization">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla delectus animi fuga odit deleniti ex.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos debitis aliquam quidem libero mollitia nemo?
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
                <p>BUI Duc Trieu</p>
                <span>Directeur</span>
                <div class="img-member">
                    <img src="./img/intro/intro1.jpg" alt="TrieuBui">
                </div>
            </div>
            <div class="content-member">
                <p>BUI Duc Trieu</p>
                <span>Directeur</span>
                <div class="img-member">
                    <img src="./img/intro/intro1.jpg" alt="TrieuBui">
                </div>
            </div>
            <div class="content-member">
                <p>BUI Duc Trieu</p>
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