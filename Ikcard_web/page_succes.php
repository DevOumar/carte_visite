<?php include('link_css.php'); ?>
<body>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center" data-aos="fade-up">
        <div class="col-lg-6 intro-info order-lg-first order-last" data-aos="zoom-in" data-aos-delay="100">
          <?php if (isset($_GET['id']) AND $_GET['id']=='succes'): ?>

          <h2>Inscription Validée avec <br><span>succès.</span> <a id="#login" href="#">Connectez vous</a></h2>
          <?php endif; ?>
          <?php if (isset($_GET['id']) AND $_GET['id']=='exists'): ?>

          <h2>L'email est déjà enregistrée <br><span>!!!</span> <a href="#">Connectez vous</a></h2>
          <?php endif; ?>
          <div>
            <a href="#"  data-toggle="modal" data-target="#login" class="btn-get-started scrollto">Connectez-Vous</a>
            ou
            <a href="#"  data-toggle="modal" data-target="#recup" class="btn-get-started scrollto">Recuperez Mot de passe</a>
          </div><br><br>
        </div>
        <div class="col-lg-6 intro-img order-lg-last order-first" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/intro-img.svg" alt="" class="img-fluid">
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="section-bg">
    <div class="container">

      <div class="row">

        <div class="col-lg-12">
          <div class="form">
            <br>
            <h4 style="text-align: center;">Contactez-nous par message</h4>
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nom et Prenom" required>
              </div>
              <div class="form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Object" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>

              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Votre message a été envoyé. Merci!</div>
              </div>

              <div class="text-center"><button type="submit" title="Send Message">Envoyer</button></div>
            </form>

          </div>

        </div>

      </div>

    </div>
  </div>
      <div class="copyright">
        &copy; Copyright <strong>IKACARD</strong>. 2022 All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
      -->
        Designed by <a href="#">SISTRA-TECHNOLOGIES</a>
      </div>
    </div>
  </footer><!-- End  Footer -->
  <div class="modal" id="login">
     <div class="modal-dialog">
        <div class="modal-content">
           <!-- Modal Header -->
           <div class="modal-header">
              <h4 class="modal-title">Connection</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
           </div>
           <!-- Modal body -->
           <div class="modal-body">
              <form class="form-control" action="login.php" method="post">
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
           </div>
           <!-- Modal footer -->
           <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
           </div>
        </div>
     </div>
  </div>
  <div class="modal fade" id="recup">
    <div class="modal-dialog">
       <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
             <h4 class="modal-title">Recuperation</h4>
             <a href="index.php"><button type="button" class="close" data-dismiss="modal">&times;</button></a>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
            <form action="" method="post">

              <div class="form-group has-feedback">
                <input type="email" class="form-control sty1" placeholder="Email">
              </div>
              <div>
                <div class="col-xs-4 m-t-1">
                  <button type="submit" class="btn btn-primary btn-block btn-flat">Recuperer</button>
                </div>
                <!-- /.col -->
              </div>
            </form>
          </div>
          <!-- Modal footer -->
          <div class="modal-footer">
            <a href="index.php"><button type="button" class="btn btn-danger"  data-dismiss="modal">Close</button></a>             </div>
       </div>
    </div>
  </div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<?php include('link_js.php'); ?>

</body>

</html>
