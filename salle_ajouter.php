<?php
session_start();
if (!isset($_SESSION['id_utilisateur'])) {
    $_SESSION['id_utilisateur'] = false;
    header('Location: index.php');
}
if ($_SESSION['role_utilisateur'] != 1 || !$_SESSION['id_utilisateur']) {
    header('Location: index.php');
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
    <title>Les Viets - Salle Ajouter</title>
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

        <nav class="navbar-compte">
            <ul class="navbar-nav-compte">

                <li class="nav-item-compte">
                    <a href="#" class="nav-link-compte">
                        <i class="fas fa-splotch"></i>
                        <span class="item-text-compte">Creation Client Compte</span>
                    </a>
                </li>

                <li class="nav-item-compte">
                    <a href="#" class="nav-link-compte">
                        <i class="fas fa-pallet"></i>
                        <span class="item-text-compte">Client Liste</span>
                    </a>
                </li>

                <li class="nav-item-compte">
                    <a href="#" class="nav-link-compte">
                        <i class="fas fa-pallet"></i>
                        <span class="item-text-compte">Creation Maison</span>
                    </a>
                </li>

                <li class="nav-item-compte">
                    <a href="#" class="nav-link-compte">
                        <i class="fas fa-pallet"></i>
                        <span class="item-text-compte">Maison Liste</span>
                    </a>
                </li>

                <li class="nav-item-compte">
                    <a href="#" class="nav-link-compte">
                        <i class="fas fa-pallet"></i>
                        <span class="item-text-compte">Creation Chambre</span>
                    </a>
                </li>

                <li class="nav-item-compte">
                    <a href="#" class="nav-link-compte">
                        <i class="fas fa-pallet"></i>
                        <span class="item-text-compte">Chambre Liste</span>
                    </a>
                </li>

                <li class="nav-item-compte" id="themeButton">
                    <a href="#" class="nav-link-compte" style="background: #B00020;">
                        <i class="fas fa-power-off"></i>
                        <span class="item-text-compte">Déconnection</span>
                    </a>
                </li>
            </ul>
        </nav>

        <main>
            <form method="post" action="sinscrire_controller.php">
                <div class="container">
                    <h1>S'INSCRIRE</h1>
                    <p>Veuillez remplir ce formulaire pour créer un compte.</p>

                    <div class="input-box">
                        <div>
                            <label for="prenom"><b>Prénom <span style="color: red;">*</span></b></label>
                            <input type="text" placeholder="Prénom" name="prenom" required />
                        </div>
                        <div>
                            <label for="nom"><b>Nom <span style="color: red;">*</span></b></label>
                            <input type="text" placeholder="Nom" name="nom" required />
                        </div>
                    </div>

                    <label for="telephone"><b>Téléphone <span style="color: red;">*</span></b></label>
                    <input type="tel" placeholder="Entrez Numéro de Téléphone" name="telephone" required />

                    <label for="email"><b>Email <span style="color: red;">*</span></b></label>
                    <input type="email" placeholder="Entrez Email" name="email" required />

                    <!-- <label for="rp-email"><b>Repeat Email</b></label>
                <input type="email" placeholder="Repeat Email" name="rp-email" required /> -->

                    <label for="motDePasse"><b>Mot De Passe <span style="color: red;">*</span></b></label>
                    <input type="password" placeholder="Entrez Mot De Passe" name="motDePasse" required />

                    <label for="motDePasse_check"><b>Répéter Mot De Passe <span style="color: red;">*</span></b></label>
                    <input type="password" placeholder="Entrer Mot De Passe" name="motDePasse_check" required />

                    <label>
                        <input type="checkbox" checked="checked" name="remember" style="margin-bottom: 15px">En créant
                        un
                        compte, vous acceptez </input>
                        <a href="#" style="color: dodgerblue">nos conditions et notre confidentialité</a>.
                    </label>

                    <div class="clearfix">
                        <button type="submit">S'inscrire</button>
                    </div>
                </div>
            </form>
        </main>
    </section>

    <!------------------------------------Body - END------------------------------------------>

</body>

</html>