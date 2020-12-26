<header class="header-nav">
    <div class="navbar-logo">
        <a href="#mainpage" class="logo">
            <img src="img/logo/logo2.png" alt="logo" />
        </a>
    </div>

    <div class="wrapper-header">
        <input type="checkbox" id="check" />
        <label for="check">
            <span id="toggle"></span>
            <div class="modal"></div>
        </label>

        <div class="sidebar">
            <div><span class="header-text">Menu</span></div>
            <ul>
                <li>
                    <a href="page_homepage.php"><span class="link-text">Accueil</span></a>
                </li>
                <li>
                    <a href="page_organigramme.php"><span class="link-text">Organigramme</span></a>
                </li>
                <li>
                    <a href="page_infomation.php"><span class="link-text">Infomation</span></a>
                </li>

                <?php if ($_SESSION['id_utilisateur'] == false) : ?>
                <li>
                    <a href="page_seConnecter.php"><span class="link-text">Se connecter</span></a>
                </li>

                <?php endif; ?>

                <?php if ($_SESSION['id_utilisateur'] == true) : ?>
                <?php if ($_SESSION['role_utilisateur'] == 0) : ?>
                <li>
                    <a href="page_monCompte.php"><span class="link-text">Mon Compte</span></a>
                </li>
                <?php endif; ?>

                <?php if ($_SESSION['role_utilisateur'] == 1) : ?>
                <li>
                    <a href="adminDashboard.php"><span class="link-text">Admin</span></a>
                </li>
                <?php endif; ?>

                <li>
                    <a href="deconnection.php"><span class="link-text">Deconnection</span></a>
                </li>
                <?php endif; ?>
            </ul>
        </div>

        <div class="modal_toggle"></div>
    </div>

    <div id="navigation">
        <ul>
            <li><a href="page_homepage.php" class="nav-link">Accueil</a></li>
            <li><a href="page_organigramme.php" class="nav-link">Organigramme</a></li>
            <li><a href="page_infomation.php" class="nav-link">Infomation</a></li>

            <?php if ($_SESSION['id_utilisateur'] == false) : ?>
            <li><a href="page_seConnecter.php" class="nav-link">Se connecter</a></li>
            <?php endif; ?>

            <?php if ($_SESSION['id_utilisateur'] == true) : ?>
            <?php if ($_SESSION['role_utilisateur'] == 1) : ?>
            <li><a href="adminDashboard.php" class="nav-link">Admin</a></li>
            <?php endif; ?>

            <?php if ($_SESSION['role_utilisateur'] == 0) : ?>
            <li><a href="page_monCompte.php" class="nav-link">MonCompte</a></li>
            <?php endif; ?>
            <li><a href="deconnection.php" class="nav-link">Deconnection</a></li>
            <?php endif; ?>
        </ul>
    </div>
</header>