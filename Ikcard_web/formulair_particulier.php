<?php session_start();include('link_base.php');  include('link_css.php');  ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper boxed-wrapper">
  <!-- Main Nav -->
<?php include('admin-header.php'); ?>
  <!-- Main Nav -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="info-box">
            <div class="card tab-style1">
              <!-- Nav tabs -->
                 <h4 class="text-center">Information Personnelles</h4>
              <!-- Tab panes -->
              <div class="tab-content">
                <!--second tab-->
                <div class="tab-pane active" id="settings" role="tabpanel" aria-expanded="true">
                  <div class="card-body">
                    <form class="form-horizontal form-material" enctype="multipart/form-data" method="post" action="save_particulier.php">
                      <div class="col-md-12">
                        <div class="card">
                          <div class="card-body">
                            <h4 class="text-black">Photo de profile</h4>
                            <label for="input-file-now">importez votre photo ici</label>
                            <input name="photo" type="file"  class="" data-max-file-size="2M"/>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <?php if(isset($_GET['pseudo'])){ ?>
                        <p class="alert alert-danger">Ce nom d'utilisateur existe déjà! Essayez un autre nom d'utilisateur</p>
                      <?php } ?>
                        <label class="col-md-12">Nom d'utilisateur <sup>*</sup> </label>
                        <div class="col-md-12">
                          <input id="searchs" placeholder="" name="pseudo" class="form-control form-control-line" type="text" required>
                            <div id="lists" style="z-index: 99; position:absolute; color:black; background-color:white; top:90px"></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-12">Nom complet <sup>*</sup></label>
                        <div class="col-md-12">
                          <input placeholder="" name="complet" class="form-control form-control-line" type="text" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <?php if(isset($_GET['email'])){ ?>
                        <p class="alert alert-danger">Cet Email existe existe déjà! Essayez un autre email !</p>
                      <?php } ?>
                        <label for="example-email" class="col-md-12">Email <sup>*</sup></label>
                        <div class="col-md-12">
                          <input placeholder="" name="email" class="form-control form-control-line" name="example-email" id="example-email" type="email" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-12">Numero <sup>*</sup></label>
                        <div class="col-md-12">
                          <input placeholder="" name="numero" class="form-control form-control-line" type="text" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-12">Fax</label>
                        <div class="col-md-12">
                          <input placeholder="" name="fax" class="form-control form-control-line" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-12">Adresse <sup>*</sup></label>
                        <div class="col-md-12">
                          <input placeholder="" name="adresse" class="form-control form-control-line" type="text" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-12">Compagnie</label>
                        <div class="col-md-12">
                          <input placeholder="" name="compagnie" class="form-control form-control-line" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-12">Poste Occupé</label>
                        <div class="col-md-12">
                          <input placeholder="" name="poste" class="form-control form-control-line" type="text" >
                        </div>
                      </div>
                        <div class="form-group">
                          <label class="col-md-12">Profession</label>
                          <div class="col-md-12">
                            <input placeholder="" name="profession" class="form-control form-control-line" type="text" >
                          </div>
                      </div>
                      <br>
                      <hr>
                      <div>
                        <h4 class="text-center">Media Sociaux</h4>
                      </div>
                      <hr>
                      <!-- lien vers les media sociaux-->
                      <div class="form-group">
                        <label class="col-md-12">Site Web</label>
                        <div class="col-md-12">
                          <input placeholder="https://wwww." name="siteweb" class="form-control form-control-line" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-12">Facebook</label>
                        <div class="col-md-12">
                          <input placeholder="https://wwww." name="facebook" class="form-control form-control-line" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="example-email" class="col-md-12">Instagram</label>
                        <div class="col-md-12">
                          <input placeholder="https://wwww." name="instagram" class="form-control form-control-line"  id="example-email" type="texte">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-12">Youtube</label>
                        <div class="col-md-12">
                          <input placeholder="https://wwww." name="youtube" class="form-control form-control-line" type="text">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-md-12">Linkedin</label>
                        <div class="col-md-12">
                          <input placeholder="https://wwww." name="linkedin" class="form-control form-control-line" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-12">whatsapp</label>
                        <div class="col-md-12">
                          <input placeholder="https://www" name="whatsapp" class="form-control form-control-line" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-12">Snapchat</label>
                        <div class="col-md-12">
                          <input placeholder="https://wwww." name="snapchat" class="form-control form-control-line" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-12">Mon Blog</label>
                        <div class="col-md-12">
                          <input placeholder="Directeur Général" name="blog" class="form-control form-control-line" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-12">Twitter</label>
                        <div class="col-md-12">
                          <input placeholder="https://wwww." name="twitter" class="form-control form-control-line" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-12">TikTok</label>
                        <div class="col-md-12">
                          <input placeholder="https://wwww." name="tiktok" class="form-control form-control-line" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-6">

                        </div>
                      </div>
                      <button type="submit" class="btn btn-success btn-block">Enregistrer</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Main row -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer ">
    <div class="copyright text-center">
        &copy; Copyright <strong>IKACARD</strong>. 2022 All Rights Reserved
      </div>
      <div class="credits text-center">
       <a href="pages-register2.html">COMMANDER UNE CARTE</a>
      </div>
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
<script src="dist/plugins/dropify/dropify.min.js"></script>
<!--Plugin Initialization-->
<script type="text/javascript">
         $(document).ready(function () {
             $("#respMenu").aceResponsiveMenu({
                 resizeWidth: '108', // Set the same in Media query
                 animationSpeed: 'fast', //slow, medium, fast
                 accoridonExpAll: false //Expands all the accordion menu on click
             });
         });

         $(document).ready(function(){
                // Basic
                $('.dropify').dropify();

                // Translated
                $('.dropify-fr').dropify({
                    messages: {
                        default: 'Glissez-déposez un fichier ici ou cliquez',
                        replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                        remove:  'Supprimer',
                        error:   'Désolé, le fichier trop volumineux'
                    }
                });

                // Used events
                var drEvent = $('#input-file-events').dropify();

                drEvent.on('dropify.beforeClear', function(event, element){
                    return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
                });

                drEvent.on('dropify.afterClear', function(event, element){
                    alert('File deleted');
                });

                drEvent.on('dropify.errors', function(event, element){
                    console.log('Has Errors');
                });

                var drDestroy = $('#input-file-to-destroy').dropify();
                drDestroy = drDestroy.data('dropify')
                $('#toggleDropify').on('click', function(e){
                    e.preventDefault();
                    if (drDestroy.isDropified()) {
                        drDestroy.destroy();
                    } else {
                        drDestroy.init();
                    }
                })
            });

</script>
</body>
</html>
