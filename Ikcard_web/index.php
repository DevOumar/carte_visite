<?php session_start(); include('link_css.php'); include('link_base.php'); ?>
<?php if(isset($_SESSION['ikcard']) AND $_SESSION['ikcard']=='tiuyuiuhtt57667HJGhghj5575'){ header('Location:admin-index.php');} else{ ?>

<body class="hold-transition skin-blue sidebar-mini">
  <!-- Main Nav -->
  <?php include("admin-header.php");  ?>
  <!-- Main Nav -->
  <!-- ======= Hero Section ======= -->
  <?php if (isset($_GET['login']) AND $_GET['login']=='dweeeffff4999JJJ99JJ99889JJJJ8888ybghghdhf76575dtt'){ include('modal.php'); } ?>

  <?php if (isset($_GET['login']) AND $_GET['login']=='dweeeffff4999JJkjhkjh776J9yuyut559JJ99889JJJJ8888ybghghdhf76575dtt'){ include('modal1.php'); } ?>

  <?php if (isset($_GET['login']) AND $_GET['login']=='dweeeffff4999JJkjhkjh776J99JJ99889JJJJ8888ybghghdhf76575dtt'){ include('modal2.php'); } ?>
  <section id="hero" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center" data-aos="fade-up">
        <div class="col-lg-6 intro-info order-lg-first order-last" data-aos="zoom-in" data-aos-delay="100">
          <h2>Bienvenue chez <br><span>IKACARD</span> la toute première carte de visite connectée  au Mali!</h2>
          <div>
            <a href="#" data-toggle="modal" data-target="#login" class="btn-get-started scrollto">Connectez-Vous</a>
          </div>
        </div>

        <div class="col-lg-6 intro-img order-lg-last order-first" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/intro-img.svg" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row">

          <div class="col-lg-5 col-md-6">
            <div class="about-img" data-aos="fade-right" data-aos-delay="100">
              <img src="assets/img/apropos.JPG" alt="">
            </div>
          </div>

          <div class="col-lg-7 col-md-6">
            <div class="about-content" data-aos="fade-left" data-aos-delay="100">
              <h2>Qu'est ce que la IKACARD ?</h2>
              <h3>IKACARD est une carte de visite connectée qui
                permet de partager toutes vos coordonnées professionnelles, et liens vers vos comptes
                réseaux sociaux avec la possibilité d'enregistre le contacte sous forme Vcard.</h3>
              <ul>
                <h2>Eco-responsabilité</h2>
                <li><i class="bi bi-check-circle"></i> Réduisez votre consommation papier.</li>
                <h2>Modifiable</h2>
                <li><i class="bi bi-check-circle"></i> Créez votre compte et modifiez le en toute simplicité.</li>
                <h2>Sans contact</h2>
                <li><i class="bi bi-check-circle"></i> Partagez vos informations où que vous soyez.</li>
                <h2>Universelle</h2>
                <li><i class="bi bi-check-circle"></i> Compatible avec tous les systèmes d’exploitation.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </section><!-- End About Section -->


    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container-fluid" data-aos="fade-up">
        <header class="section-header">
          <h3>Pourquoi IKACARD?</h3>
          <p> Créez votre portail professionnel et partagez vos informations instantanément avec IKACARD.
            De votre fiche de contact à vos réseaux sociaux,
            vous n’êtes plus qu’à une carte de votre futur professionnel.
            Unique, modifiable à tout moment, la IKACARD est votre nouvel atout pour étendre votre réseau..</p>
        </header>

          <div class="row">
            <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
              <div class="why-us-img">
                <img src="assets/img/why-us.jpg" alt="" class="img-fluid">
              </div>
          </div>

          <div class="col-lg-6">
              <div class="features clearfix" data-aos="fade-up" data-aos-delay="100">
                <br><br><br><br><br>
                <div class="titre">
                  <h2>Rejoignez-nous vite</h2>

                <div class="social-links">
                  <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                  <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                  <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row counters" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6 col-12 text-center">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <h2>Nos utilisateurs</h2>
          </div>

          <div class="col-lg-6 col-12 text-center">
            <span data-purecounter-start="0" data-purecounter-end="421" data-purecounter-duration="1" class="purecounter"></span>
            <h2>La communauté IKACARD</h2>
          </div>
        </div>
      </div>
    </section><!-- End Why Us Section -->
    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <header class="section-header">
          <h3>Nos Clients</h3>
        </header>

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h3>Frequently Asked Questions</h3>
        </header>

        <ul class="faq-list" data-aso="fade-up" data-aos-delay="100">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Comment marche la IKACAR? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                La IKACARD contient une puce NFC qui envoie vos informations sans fil au téléphone
                de votre interlocuteur. Si vous appuyez la carte sur les téléphones compatibles,
                un lien s'ouvrira avec vos coordonnées prêtes à être enregistrées sur le téléphone.
                Pour les téléphones plus anciens qui n'ont pas la NFC,
                il y a un code QR sur la carte que vous pouvez scanner ainsi qu’un lien que vous pouvez taper
                dans le navigateur.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">  Est-ce que la IKACARD marche avec mon téléphone ?
              <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Tous les Androids et tous les iPhones plus récents sont compatibles avec notre fonction NFC. Pour les téléphones dépourvus de cette fonction, nous vous recommandons d'utiliser la fonction de code QR. Tous les téléphones, Apple et Android, qui sont mis à jour avec le dernier logiciel ont un scanner de code QR intégré. Ouvrez simplement l'appareil photo et pointez le code QR.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question"> Y-a-t-il un abonnement à payer après l’achat de la carte ?
              <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Non, le service de carte de visite connectée qu’offre la IKACAR est gratuit après l’achat de votre carte. Faites juste un achat unique et profitez-en.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question"> Que faire en cas de perte ou renouvellement de la carte ?
              ? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                Veuillez nous contacter. Notez que tout renouvellement de la Yolicard, donc l’acquisition d’une nouvelle carte en gardant son profil est facturé à hauteur de 10 000 FCFA. Les frais de livraison et/ou d’expédition étant à votre charge.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question"> Conseils pour scanner un code QR
              <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
                Veuillez actualiser la page, puis assurez-vous d’avoir autorisé l’ouverture de votre caméra. Si l'appareil photo de votre téléphone ou de votre tablette ne parvient pas à scanner le code, essayez d'augmenter la luminosité ambiante ou suivez les conseils ci-dessous. <br>

            • Augmenter la luminosité ambiante. <br>
            • Placer le produit sur un arrière-plan neutre. <br>
            • Poser le produit sur une surface stable. <br>
            • Ne pas incliner le téléphone. <br>
            • Garder la bonne distance. <br>
            • Éviter les ombres. <br>
            • Nettoyer l'objectif. <br>
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">
              Est-ce possible d'obtenir cette carte avec ma propre marque ?
              <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <p>
                Non. La IKACARD vous intègre dans une communauté. L’uniformité du design vous permet d’aller à l’essentiel, c’est-à-dire le partage efficace et innovant de vos coordonnées professionnelles.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq7" class="collapsed question">
              La IKACARD est-elle sécurisée ?

              <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq7" class="collapse" data-bs-parent=".faq-list">
              <p>
                La IKACARD est aussi sûre que n'importe quelle technologie nouvelle génération et aussi sûre que les informations que vous y mettez. Elle ne fonctionne qu'à quelques centimètres d'un appareil compatible et ne peut que partager plutôt que d'extraire des informations. De plus, aucune information financière n'est stockée. Tous les détails partagés sont généralement des détails que vous aurez sur l'une de vos cartes de visite traditionnelles.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq8" class="collapsed question">
              Avez-vous un programme de parrainage ?


              <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq8" class="collapse" data-bs-parent=".faq-list">
              <p>
                Nous proposons un programme d'affiliation. Veuillez nous contacter afin que nous puissions discuter des détails.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End F.A.Q Section -->

  </main><!-- End #main -->

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

              <div class="text-center"><button type="submit" class= "btn-envoie" title="Send Message">Envoyer</button></div>
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
       <a href="pages-register2.html">COMMANDER UNE CARTE</a>
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
              <div data-toggle="modal" data-target="#recuperation" class="m-t-2">Mot de passe oublié? <a href="index.php?login=dweeeffff4999JJkjhkjh776J99JJ99889JJJJ8888ybghghdhf76575dtt" class="text-center">Reinitialisé mot de passe !</a></div>
              <div data-toggle="modal" data-target="#inscription" class="m-t-2">Vous n'avez pas de compte ? <a href="index.php?login=dweeeffff4999JJkjhkjh776J9yuyut559JJ99889JJJJ8888ybghghdhf76575dtt" class="text-center">Inscrivez Vous</a></div>
           </div>
           <div class="modal-footer">
              <button type="button"  class="btn btn-danger" data-dismiss="modal">Close</button>
           </div>
        </div>
     </div>
  </div>
  <div class="modal"  id="recuperation">
    
  </div>

  <div class="modal" id="inscription">

  </div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <?php include('link_js.php'); ?>
<script type="text/javascript">
         $(document).ready(function () {
             $("#respMenu").aceResponsiveMenu({
                 resizeWidth: '768', // Set the same in Media query
                 animationSpeed: 'fast', //slow, medium, fast
                 accoridonExpAll: false //Expands all the accordion menu on click
             });
         });
</script>
</body>
</html>
<?php } ?>
