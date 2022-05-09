<?php include('link_css.php'); ?>
<body>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center" data-aos="fade-up">
        <div class="col-lg-6 intro-info order-lg-first order-last" data-aos="zoom-in" data-aos-delay="100">
          <?php if (isset($_GET['succeful']) AND $_GET['succeful']=='hjh6876hjgh778hjgjh78687'): ?>
          <h2>Enregistrement Validé avec <span>succès.</span>
             <a href="profile-particulier/profil_particulier.php?pseudo=<?php echo $_GET['pseudo']; ?>">Affichez la Carte</a></h2>
          <h2>Ou Enregistrez <a href="formulair_particulier.php">nouvelle carte</a></h2>
          <?php endif; ?>
          <?php if (isset($_GET['id']) AND $_GET['id']=='exists'): ?>
          <h2>!!<br><span>!!!</span> <a href="formulair_particulier.php">Reéssayez!!</a></h2>
          <?php endif; ?>
        </div>
        <div class="col-lg-6 intro-img order-lg-last order-first" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/intro-img.svg" alt="" class="img-fluid">
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<?php include('link_js.php'); ?>

</body>

</html>
