
<?php session_start();session_destroy();session_start(); include('link_css.php'); ?>

<body class="hold-transition login-page sty1" style="background-image:url('assets/img/intro-img.svg');">
<div class="login-box sty1" data-aos="zoom-out" data-aos-delay="200">
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
  <div style="position:relative;right:200%;bottom:80%;color:black" class="">
    <h1 style="font-weight: bold;color:rgb(0,0,50)">Bienvenue chez <br><span style="color:rgb(255,165,50)">IKACARD</span> la toute première carte de visite connectée  au Mali!</h1>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<?php include('link_js.php') ?>
</body>
</html>
