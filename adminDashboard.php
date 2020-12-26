<?php
session_start();
if (!isset($_SESSION['id_utilisateur'])) {
    $_SESSION['id_utilisateur'] = false;
    header('Location: page_homepage.php');
}
if ($_SESSION['role_utilisateur'] != 1 || !$_SESSION['id_utilisateur']) {
    header('Location: page_homepage.php');
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
    <title>Les Viets - AdminDashboard</title>
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
            <h1 style="margin: 20px 0">ADMIN</h1>

            <p>
                Next level selfies cronut ethical. Tofu tumblr you probably haven't heard
                of them, man braid literally forage swag chillwave. Pug yr flannel
                tumeric. Coloring book yr chillwave snackwave, shoreditch shaman gentrify
                typewriter tumeric DIY copper mug small batch. Scenester waistcoat YOLO
                hexagon kombucha poke 8-bit meditation. Selvage scenester forage
                williamsburg. Hoodie fingerstache tacos mustache, hashtag quinoa next
                level sartorial craft beer retro disrupt lo-fi.
            </p>
            <p>
                YOLO twee keytar farm-to-table flexitarian cardigan polaroid lumbersexual
                adaptogen drinking vinegar echo park dreamcatcher. Brunch shoreditch
                dreamcatcher iPhone knausgaard plaid edison bulb letterpress ethical yr
                fanny pack. Typewriter portland woke glossier cronut, post-ironic migas
                gentrify letterpress cray brunch lyft 8-bit master cleanse. Pitchfork
                thundercats organic pour-over unicorn lomo.
            </p>
            <p>
                Ugh yr tacos aesthetic everyday carry, tumeric selvage cliche skateboard.
                Wolf truffaut enamel pin vexillologist poutine. Hoodie roof party pabst,
                cardigan letterpress af disrupt +1 subway tile chillwave live-edge
                meggings next level readymade. Master cleanse gentrify hashtag, stumptown
                fam single-origin coffee occupy dreamcatcher air plant viral vexillologist
                enamel pin meggings. Tumblr chambray pickled microdosing austin scenester
                green juice.
            </p>
            <p>
                Austin four dollar toast church-key, vaporware hoodie edison bulb jean
                shorts sustainable williamsburg plaid helvetica scenester lomo humblebrag.
                Meditation tumblr kickstarter ennui williamsburg taiyaki pabst pour-over.
                8-bit godard cred, chillwave enamel pin skateboard you probably haven't
                heard of them. Meditation before they sold out single-origin coffee swag
                try-hard jianbing slow-carb shaman leggings. Palo santo shabby chic
                whatever man bun. Master cleanse wayfarers single-origin coffee pork belly
                cronut, normcore cliche jianbing before they sold out tousled shabby chic
                af pop-up gentrify. Direct trade la croix vexillologist jianbing,
                flexitarian selvage try-hard stumptown polaroid shaman wayfarers poke
                ramps food truck swag.
            </p>
            <p>
                Pok pok lumbersexual wayfarers, direct trade leggings poutine truffaut
                kitsch. Seitan aesthetic master cleanse squid coloring book banh mi YOLO
                vegan locavore vexillologist readymade next level pop-up edison bulb.
                Selvage knausgaard literally, quinoa photo booth 3 wolf moon microdosing
                freegan yuccie. Truffaut gentrify lomo put a bird on it waistcoat. Ugh
                austin distillery, tbh actually pork belly snackwave artisan mixtape
                quinoa vexillologist pok pok polaroid listicle readymade.
            </p>
            <p>
                Hammock letterpress prism dreamcatcher truffaut shabby chic vice
                cold-pressed. Franzen pug fashion axe before they sold out, tumblr irony
                kogi actually af bushwick banh mi. Snackwave bicycle rights tofu
                dreamcatcher tote bag pour-over meditation raw denim fanny pack. Pop-up
                retro taiyaki meditation twee gastropub VHS etsy. Semiotics gochujang
                street art normcore, edison bulb farm-to-table pour-over taxidermy
                brooklyn.
            </p>
        </main>
    </section>

    <!------------------------------------Body - END------------------------------------------>

</body>

</html>