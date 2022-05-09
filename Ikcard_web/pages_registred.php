<?php include('link_css.php'); ?>
<body class="hold-transition login-page sty1" style="background:url('assets/img/intro-img.svg')">
<div class="login-box sty1" data-aos="zoom-out" data-aos-delay="200">
  <div class="login-box-body sty1">
  <div class="login-logo">
    <a href="index.html"><img src="assets/img/logo-ikacard2.jpg" alt=""></a>
  </div>
    <p class="login-box-msg">Inscrivez-vous et profitez !</p>
    <form action="save_step1.php" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control sty1" name="nom" placeholder="Nom" required>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control sty1" name="prenom" placeholder="Prenom" required>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control sty1" name="email" placeholder="Email" required>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control sty1" name="pass" placeholder="Mot de passe" required>
      </div>
        <div class="col-xs-4 m-t-1">
          <input type="submit" class="btn btn-primary btn-block" value="Inscription">
      </div>
    </form>
    <div class="m-t-2">Vous avez déjà un compte ? <a href="pages_login.php" class="text-center">Connectez Vous</a></div>
  </div>
  <div style="position:relative;right:200%;bottom:80%;color:black" class="">
    <h1 style="font-weight: bold;color:rgb(0,0,50)">Bienvenue chez <br><span style="color:rgb(255,165,50)">IKACARD</span> la toute première carte de visite connectée  au Mali!</h1>
  </div>
  <!-- /.login-box-body -->
</div>
<?php include('link_js.php'); ?>
</body>
</html>
