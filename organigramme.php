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
    <link rel="icon" type="image/png" href="../img/logo.jpg" />

    <link rel="stylesheet" href="css/style.css" />
    <title>VIETSAF - Organigramme</title>
</head>

<body id="mainpage">
    <!------------------------------- HEADER - START ------------------------------------------>
    <?php
    require_once('utils/header.php');
    ?>
    <!--------------------------------- HEADER - END ------------------------------------>

    <section class="organi">
        <!--intro-project-->
        <div class="organi-box">
            <h2>Our Project</h2>
            <div class="box-content">
                <img src="img/logo.jpg" alt="project" />
                <div>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum
                    eaque, iste quisquam iusto reiciendis ab reprehenderit illum
                    dolorum? Similique aperiam quam, neque vel explicabo, soluta
                    obcaecati quos fugiat nihil nostrum possimus expedita!
                </div>
            </div>
        </div>
        <!--intro-tutor-->
        <div class="organi-box">
            <h2>Our Tutor</h2>
            <div class="box-content">
                <img src="img/logo.jpg" alt="tutor" />
                <div>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum
                    eaque, iste quisquam iusto reiciendis ab reprehenderit illum
                    dolorum? Similique aperiam quam, neque vel explicabo, soluta
                    obcaecati quos fugiat nihil nostrum possimus expedita!
                </div>
            </div>
        </div>
        <!--intro-groupe-->
        <div class="organi-box">
            <h2>Our Team</h2>
            <div class="box-content">
                <div class="element-1">
                    <img src="img/maison.jpg" alt="image1" />
                    <div class="ele-content">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid
                        quidem provident ratione consequatur, quos suscipit.
                    </div>
                </div>
                <div class="element-2">
                    <div class="small-ele">
                        <img src="img/maison.jpg" alt="sele1" />
                        <div class="s-ele-content">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint
                            repudiandae, quae dolores vero nostrum quibusdam.
                        </div>
                    </div>
                    <div class="small-ele">
                        <img src="img/maison.jpg" alt="sele1" />
                        <div class="s-ele-content">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure
                            velit molestias sint, minus atque in.
                        </div>
                    </div>
                    <div class="small-ele">
                        <img src="img/maison.jpg" alt="sele1" />
                        <div class="s-ele-content">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Doloribus perspiciatis, nemo eligendi libero nihil obcaecati!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--footer-->
    <?php
    require_once('utils/footer.php');
    ?>
</body>

</html>