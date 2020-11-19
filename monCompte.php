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
    <title>Les Viets - Info</title>
</head>

<body id="mainpage">
    <!------------------------------- HEADER - START ------------------------------------------>
    <?php
    require_once('utils/header.php');
    ?>
    <!----------------------------------- HEADER - END ---------------------------------------->

    <!------------------------------------Body - START------------------------------------------>



    <!------------------------------------Body - END------------------------------------------>

    <!--footer-->
    <?php
    require_once('utils/footer.php');
    ?>
</body>

</html>