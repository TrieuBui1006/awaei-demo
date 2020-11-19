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
    <!--------------------------------- HEADER - END ------------------------------------>

    <!--Form Contact-->
    <div class="background">
        <section class="container-contact">
            <form action="">
                <h2>Contact Us</h2>
                <div class="row100">
                    <div class="col">
                        <div class="inputBox">
                            <input type="text" name="firstname" required="required" />
                            <span class="text">Nom <span style="color: red;">*</span></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inputBox">
                            <input type="text" name="lastname" required="required" />
                            <span class="text">Prénom <span style="color: red;">*</span></span>
                            <span class="line"></span>
                        </div>
                    </div>
                </div>
                <div class="row100">
                    <div class="col">
                        <div class="inputBox">
                            <input type="text" name="email" required="required" />
                            <span class="text">Email <span style="color: red;">*</span></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inputBox">
                            <input type="text" name="mobile" required="required" />
                            <span class="text">Téléphone <span style="color: red;">*</span></span>
                            <span class="line"></span>
                        </div>
                    </div>
                </div>
                <div class="row100">
                    <div class="col">
                        <div class="inputBox textarea">
                            <textarea required="required"></textarea>
                            <span class="text">Tapez votre message ici... <span style="color: red;">*</span></span>
                            <span class="line"></span>
                        </div>
                    </div>
                </div>
                <div class="row100">
                    <div class="col">
                        <div class="inputBox">
                            <input type="submit" value="Envoyer" />
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>

    <!--footer-->
    <?php
    require_once('utils/footer.php');
    ?>
</body>

</html>