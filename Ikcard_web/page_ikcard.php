<?php session_start(); ?>
<?php include('link_css.php'); ?>
<body>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center" data-aos="fade-up">
        <div class="col-lg-6 intro-info order-lg-first order-last" data-aos="zoom-in" data-aos-delay="100">
          <h2>Bienvenue chez <br><span>IKACARD</span> la toute première carte de visite connectée  au Mali!</h2>
          <div>

          </div>
        </div>

        <div class="col-lg-6 intro-img order-lg-last order-first" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/intro-img.svg" alt="" class="img-fluid">
        </div>
        <div style="position:fixed;right:-120px;top:0px" class="login-box sty1" data-aos="zoom-out" data-aos-delay="200">
          <div class="login-box-body sty1">
          <div class="login-logo">
            <a href="index.html"><img src="assets/img/logo-ikacard2.jpg" alt=""></a>
          </div>
            <p class="login-box-msg">Connectez-vous et profitez !</p>
            <?php if (isset($_GET['erreur']) AND $_GET['erreur']=='khgkjhkjhkj878hjhg6g665xhwwemailpsw'): ?>
              <h6 class="alert alert-danger" style="text-align:center">Email ou Mot de passe incorrects ! Réessayez !</h6>
            <?php endif; ?>
            <form action="login.php" method="post">
              <div class="form-group has-feedback">
                <input type="email" class="form-control sty1" name="email" placeholder="Email" required>
              </div>
              <div class="form-group has-feedback">
                <input type="password" class="form-control sty1" name="pass" placeholder="Mot de passe" required>
              </div>
                <div class="col-xs-4 m-t-1">
                  <input type="submit" class="btn btn-primary btn-block" value="Connection">
              </div>
            </form>
            <div class="m-t-2">Mot de passe oublié? <a href="recuperer.php" class="text-center">Reinitialisé mot de passe !</a></div>
            <div class="m-t-2">Vous n'avez pas de compte ? <a href="pages_registred.php" class="text-center">Inscrivez Vous</a></div>
          </div>

          <!-- /.login-box-body -->
        </div>
      </div>

    </div>
  </section><!-- End Hero -->
<?php include('link_js.php'); ?>

</body>

</html>
