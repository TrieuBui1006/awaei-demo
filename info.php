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
    require_once('/xampp/htdocs/awei-demo/utils/header.php');
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
                            <span class="text">First Name</span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inputBox">
                            <input type="text" name="lastname" required="required" />
                            <span class="text">Last Name</span>
                            <span class="line"></span>
                        </div>
                    </div>
                </div>
                <div class="row100">
                    <div class="col">
                        <div class="inputBox">
                            <input type="text" name="email" required="required" />
                            <span class="text">Email</span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inputBox">
                            <input type="text" name="mobile" required="required" />
                            <span class="text">Mobile</span>
                            <span class="line"></span>
                        </div>
                    </div>
                </div>
                <div class="row100">
                    <div class="col">
                        <div class="inputBox textarea">
                            <textarea required="required"></textarea>
                            <span class="text">Type your message Here...</span>
                            <span class="line"></span>
                        </div>
                    </div>
                </div>
                <div class="row100">
                    <div class="col">
                        <div class="inputBox">
                            <input type="submit" value="Send" />
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>

    <!--footer-->
    <?php
    require_once('/xampp/htdocs/awei-demo/utils/footer.php');
    ?>
</body>

</html>