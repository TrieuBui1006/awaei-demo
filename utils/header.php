<header class="header-nav">
    <div class="navbar-logo">
        <a href="#mainpage" class="logo">
            <img src="img/logo/logo2.png" alt="logo"/>
        </a>
    </div>

    <div class="wrapper-header">
        <input type="checkbox" id="check" />
        <label for="check">
            <span id="toggle"></span>
        </label>

        <div class="sidebar">
            <div><span class="header-text">Menu</span></div>
            <ul>
                <li>
                    <a href="index.php"><span class="link-text">Accueil</span></a>
                </li>
                <li>
                    <a href="organigramme.php"><span class="link-text">Organigramme</span></a>
                </li>
                <li>
                    <a href="info.php"><span class="link-text">Info</span></a>
                </li>

                <?php if ($_SESSION['id_utilisateur'] == false) : ?>
                <li>
                    <a href="seConnecter.php"><span class="link-text">Se connecter</span></a>
                </li>
                <li>
                    <a href="sinscrire.php"><span class="link-text">S'inscrire</span></a>
                </li>
                <?php endif; ?>

                <?php if ($_SESSION['id_utilisateur'] == true) : ?>
                <li>
                    <a href="monCompte.php"><span class="link-text">Mon Compte</span></a>
                </li>
                <li>
                    <a href="deconnection.php"><span class="link-text">Deconnection</span></a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>

    <div id="navigation">
        <ul>
            <li><a href="index.php" class="nav-link">Accueil</a></li>
            <li><a href="organigramme.php" class="nav-link">Organigramme</a></li>
            <li><a href="info.php" class="nav-link">Info</a></li>

            <?php if ($_SESSION['id_utilisateur'] == false) : ?>
            <li><a href="seConnecter.php" class="nav-link">Se connecter</a></li>
            <li><a href="sinscrire.php" class="nav-link">S'inscrire</a></li>
            <?php endif; ?>

            <?php if ($_SESSION['id_utilisateur'] == true) : ?>
            <li><a href="monCompte.php" class="nav-link">Mon Compte</a></li>
            <li><a href="deconnection.php" class="nav-link">Deconnection</a></li>
            <?php endif; ?>
        </ul>
    </div>
</header>