<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://kit.fontawesome.com/58cdc139df.js" crossorigin="anonymous"></script>
    <!--LogoPage-->
    <link rel="icon" type="image/png" href="../img/logo.jpg" />

    <link rel="stylesheet" href="css/style.css" />
    <title>Les Viets - Se Connecter</title>
</head>

<body id="mainpage">
    <!------------------------------- HEADER - START ------------------------------------------>
    <?php
    require_once('/xampp/htdocs/awei-demo/utils/header.php');
    ?>
    <!--------------------------------- HEADER - END ------------------------------------>

    <!--SignIn-->
    <section id="wrapper-signin">
        <form name="login-form" class="login-form" action="" method="post">
            <h1>Login</h1>

            <div class="content-login">
                <div class="inputBox">
                    <input type="text" name="ID" required="required" />
                    <span>ID</span>
                </div>

                <div class="inputBox">
                    <input type="password" name="password" required="required" />
                    <span>Password</span>
                </div>
            </div>
            <div class="button-login">
                <button class="submit-btn" type="submit">Login</button>
                <a href="sinscrire.php">Register</a>
            </div>
        </form>
    </section>

    <!--footer-->
    <?php
    require_once('/xampp/htdocs/awei-demo/utils/footer.php');
    ?>

</body>

</html>