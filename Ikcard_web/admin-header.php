<header class="main-header">
    <!-- Logo -->
    <a href="admin-index.php" class="logo blue-bg">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><img src="dist/img/logo-ikacard2.jpg" alt=""></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><img src="dist/img/logo-ikacard2.jpg" alt=""></span> </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar blue-bg navbar-static-top">
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu p-ph-res"><?php if (isset($_SESSION['ikcard'])): ?> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="hidden-xs">
            <?php echo $_SESSION['prenom'].' '.$_SESSION['nom']; ?></span> </a><?php endif; ?>
            <?php if (isset($_SESSION['ikcard'])): ?><ul class="dropdown-menu">
              <li class="user-header">
                <div class="pull-left user-img"><img src="images_user/<?php echo $_SESSION['photo']; ?>" class="img-responsive" alt="User"></div>
                <p class="text-left"><?php echo $_SESSION['nom']; ?><small><?php $_SESSION['email']; ?></small> </p>
                <div class="view-link text-left"><a href="admin-profile.php?id=<?php echo $_SESSION['id']; ?>">Voir Profile</a>
              </li>
              <li role="separator" class="divider"></li>
              <li><a href="admin-profile.php?id=<?php echo $_SESSION['id']; ?>"><i class="icon-gears"></i> Paramètre du compte</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="deconnection.php"><i class="fa fa-power-off"></i> Se déconnecter</a></li></div><?php endif; ?>
            </ul>
          </li>
        </ul>
      </div>
    </nav>

</header>

  <div class="main-nav">
        <nav>
            <!-- Menu Toggle btn-->
            <div class="menu-toggle">
                <h3>Menu</h3>
                <button type="button" id="menu-btn"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>

            <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                  <?php if (isset($_SESSION['ikcard'])): ?><li><a href="admin-index.php">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                <li><a href="#"><i class="fa fa-bullseye"></i> <span>Menu</span></a>
                    <ul>
                        <li><a href="admin-index.php">Acceuil</a></li>
                        <li><a href="admin-liste_utilisateurs.php">Liste des Particuliers</a></li>
                        <li><a href="admin-liste_entreprises.php">Liste des entreprises</a></li>
                        <li><a href="admin-mailbox.php">Boite aux lettres</a></li>
                        <li><a href="qrcode-generator/code-generator.php">Code Qr</a></li>
                        <li><a href="admin-admin-panel.php">Admin Panel Qr</a></li>
                    </ul>

                </li>
              <?php endif; ?>
            </ul>


        </nav>

  </div>
