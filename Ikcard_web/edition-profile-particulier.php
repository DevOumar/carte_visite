<?php session_start(); include('link_css.php'); include('link_base.php'); include("admin-header.php"); ?>
 <!-- End Main Nav -->


    <!-- Main content -->
  <div class="content-wrapper">
    <div class="content">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="user-profile-box m-b-3">
            <div class="box-profile text-white"> <img class="profile-user-img img-responsive img-circle m-b-2" src="dist/img/seyba.jpg" alt="User profile picture">

            </div>
            <a href=""><h5 class="text-center">Modifier Photo de profile</h5></a>
          </div>
          <div class="info-box">
            <h3 class="text-center">Information personnelles <a href=""><i class="fa fa-edit"></i></a></h3>
            <br>
           <div class=" info col-lg-12 offset-lg-2">
            <div class="row">
              <div class="col-sm-6">
                    <h5>Nom Complet</h5>

                </div>
                <div class="col-sm-6">
                  <p> Seyba Sissoko</p>
               </div>

                <div class="col-sm-6 ">
                    <h5>Téléphone</h5>

                </div>
                <div class="col-sm-6">
                  <p> +91 9876543215</p>
               </div>

                <div class="col-sm-6">
                  <h5> Email</h5>

                </div>
                <div class="col-sm-6">
                  <p> kiranacharya287@gmail.com</p>
                </div>

                <div class="col-sm-6">
                  <h5>Profession</h5>

                </div>
                <div class="col-sm-6">
                  <p>Bioinformaticien</p>
                </div>

                <div class="col-sm-6">
                  <h5>Compagnie</h5>

                </div>
                <div class="col-sm-6">
                  <p>SISTRA TECHNOLOGIES</p>
                </div>

                <div class="col-sm-6">
                  <h5> Site Web</h5>

                </div>
                <div class="col-sm-6">
                  <p > kiranworkspace.com</p>
                </div>

                <div class="col-sm-6">
                  <h5> Adresse</h5>

                </div>
                <div class="col-sm-6">
                  <p> Bangalore</p>
                </div>
            </div>
          </div>
          <!-- Information media sociaux-->
          <h3 class="text-center">Media Sociaux<a href=""> <i class="fa fa-edit"></i></a></h3>
          <br>
          <div class="media-sociaux col-lg12 offset-lg-2">
            <div class="row">

              <div class="col-sm-6 ">
                  <h5>Facebook </h5>

              </div>
              <div class="col-sm-6">
                <p> https://www.facebook.com/seybasissoko1</p>
             </div>

              <div class="col-sm-6">
                <h5>Instagram</h5>

              </div>
              <div class="col-sm-6">
                <p> kiranacharya287@gmail.com</p>
              </div>
              <div class="col-sm-6">
                <h5> WhatsApp</h5>
              </div>
              <div class="col-sm-6">
                <p> +22374002230</p>
              </div>
              <div class="col-sm-6">
                <h5> Telegram</h5>
              </div>
              <div class="col-sm-6">
                <p> t.me/kingtango</p>
              </div>

              <div class="col-sm-6">
                <h5>Tweeter</h5>

              </div>
              <div class="col-sm-6">
                <p>Bioinformaticien</p>
              </div>

              <div class="col-sm-6">
                <h5>TikTok</h5>

              </div>
              <div class="col-sm-6">
                <p>SISTRA TECHNOLOGIES</p>
              </div>

              <div class="col-sm-6">
                <h5>Mon Blog</h5>

              </div>
              <div class="col-sm-6">
                <p > kiranworkspace.com</p>
              </div>

              <div class="col-sm-6">
                <h5> Linkdin</h5>
              </div>
              <div class="col-sm-6">
                <p> Bangalore</p>
              </div>
              <div class="col-sm-6">
                <h5> SnapChat</h5>
              </div>
              <div class="col-sm-6">
                <p> Bangalore</p>
              </div>
            </div>
          </div>
        </div>

            <!-- /.box-body -->
          </div>
        </div>
      </div>
      <!-- Main row -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include("footer.php");?>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="dist/js/jquery.min.js"></script>

<!-- v4.0.0-alpha.6 -->
<script src="dist/bootstrap/js/bootstrap.min.js"></script>

<!-- template -->
<script src="dist/js/niche.js"></script>

<!-- jQuery UI 1.11.4 -->
<script src="dist/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="dist/plugins/hmenu/ace-responsive-menu.js" type="text/javascript"></script>
<!--Plugin Initialization-->
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
