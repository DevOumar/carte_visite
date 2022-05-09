<?php session_start(); include('link_css.php'); include('link_base.php');
  $req=$bdd->prepare('SELECT * from particulier where id=? ');
  $req->execute(array($_GET['id']));
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper boxed-wrapper">
  <?php if($rep=$req->fetch()){ ?>
    <!-- Main content -->
    <div class="content">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="user-profile-box m-b-3">
            <div class="box-profile text-white"> <img class="profile-user-img img-responsive img-circle m-b-2"
               src="images_particulier/<?php echo $rep['photo'];  ?>" alt="User profile picture">
            </div>
            <h5 class="text-center">Modifier photo de profile
              <a><i data-toggle="modal" data-target="#photo" class="fa fa-edit"></i></a></h5>
          </div>
          <div class="modal fade" id="photo" tabindex="-1" role="dialog" aria-labelledby="photoaria" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="photoaria">Choisir une Photo</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                <form class="form" action="update.php?id=<?php echo $rep['id'].'&photo='.$rep['photo']; ?>" method="post" enctype="multipart/form-data">
                  <input type="file" name="photo" value="">
                  <button class="btn btn-secondary" type="submit" name="button">Valider</button>
                </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                </div>
              </div>
            </div>
          </div>
          <div class="info-box">
            <h3 class="text-center">Information personnelles <a data-toggle="modal" data-target="#perso" href="#"><i class="fa fa-edit"></i></a></h3>
            <br>
           <div class=" info col-lg-12 offset-lg-2">
            <div class="row">
              <div class="col-sm-6">
                    <h5>Nom Complet</h5>
                </div>
                <div class="col-sm-6">
                  <p><?php echo $rep['name_all'] ?></p>
               </div>

                <div class="col-sm-6 ">
                    <h5>Téléphone</h5>

                </div>
                <div class="col-sm-6">
                  <p><?php echo $rep['numero'] ?></p>
               </div>

                <div class="col-sm-6">
                  <h5> Email</h5>

                </div>
                <div class="col-sm-6">
                  <p><?php echo $rep['email'] ?></p>
                </div>

                <div class="col-sm-6">
                  <h5>Profession</h5>

                </div>
                <div class="col-sm-6">
                  <p><?php echo $rep['profession'] ?></p>
                </div>

                <div class="col-sm-6">
                  <h5>Compagnie</h5>

                </div>
                <div class="col-sm-6">
                  <p><?php echo $rep['compagnie'] ?></p>
                </div>

                <div class="col-sm-6">
                  <h5> Site Web</h5>

                </div>
                <div class="col-sm-6">
                  <p><?php echo $rep['site_web'] ?></p>
                </div>

                <div class="col-sm-6">
                  <h5> Adresse</h5>

                </div>
                <div class="col-sm-6">
                  <p><?php echo $rep['adresse'] ?></p>
                </div>
                <div class="col-sm-6">
                  <h5> Fax</h5>

                </div>
                <div class="col-sm-6">
                  <p><?php echo $rep['fax'] ?></p>
                </div>
            </div>
          </div>
          <div class="modal fade" id="perso" tabindex="-1" role="dialog" aria-labelledby="persoaria" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="persoaria">Changer les infos personnelles</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <table style="width:100%">
                <form class="form-horizontal form-material" action="update.php?id=<?php echo $rep['id'].'&perso=hkj876876hggh5f54fdfGH665FF66iII87ll'; ?>" method="post" enctype="multipart/form-data">
                  <tr><td><label for="">Nom Complet:</label> </td><td><div class="form-group">
                    <input class="form-control form-control-line" id="complet" type="text" name="complet" >
                    <script>
                      document.getElementById('complet').value ="<?php echo $rep['name_all']; ?>";
                    </script>
                  </div></td></tr>
                  <tr><td><label for="">Email:</label> </td><td><div class="form-group">
                    <input class="form-control form-control-line" id="email" type="email" name="email" >
                    <script>
                      document.getElementById('email').value ="<?php echo $rep['email']; ?>";
                    </script>
                  </div></td><tr/>
                  <tr><td><label for="">Contact:</label> </td><td><div class="form-group">
                    <input class="form-control form-control-line" id="numero" type="text" name="numero" >
                    <script>
                      document.getElementById('numero').value ="<?php echo $rep['numero']; ?>";
                    </script>
                  </div></td></tr>
                  <tr><td><label for="">Fax:</label> </td><td><div class="form-group">
                    <input class="form-control form-control-line" id="fax" placeholder="Fax" type="text" name="fax" >
                    <?php if(isset($rep['fax']) AND $rep['fax']!=''){ ?>
                    <script>
                      document.getElementById('fax').value ="<?php echo $rep['fax']; ?>";
                    </script>
                  <?php } ?>
                  </div></td></tr>
                  <tr><td><label for="">Adresse:</label> </td><td><div class="form-group">
                    <input class="form-control form-control-line" id="adresse" type="text" name="adresse" >
                    <script>
                      document.getElementById('adresse').value ="<?php echo $rep['adresse']; ?>";
                    </script>
                  </div></td></tr>
                  <tr><td><label for="">Compagnie:</label> </td><td><div class="form-group">
                    <input class="form-control form-control-line" id="compagnie" type="text" name="compagnie" >
                    <script>
                      document.getElementById('compagnie').value ="<?php echo $rep['compagnie']; ?>";
                    </script>
                  </div></td></tr>
                  <tr><td><label for="">Poste Occupé:</label> </td><td><div class="form-group">
                    <input class="form-control form-control-line" id="poste" type="text" name="poste" >
                    <script>
                      document.getElementById('poste').value ="<?php echo $rep['poste_occupe']; ?>";
                    </script>
                  </div></td></tr>
                  <tr><td><label for="">Profession:</label> </td><td><div class="form-group">
                    <input class="form-control form-control-line" id="profession" type="text" name="profession" >
                    <script>
                      document.getElementById('profession').value ="<?php echo $rep['profession']; ?>";
                    </script>
                  </div></td></tr>
                  <tr><td><label for="">Site Web:</label> </td><td><div class="form-group">
                    <input class="form-control form-control-line" id="siteweb" placeholder="Site Web" type="text" name="siteweb" >
                    <?php if(isset($rep['site_web']) AND $rep['site_web']!=''){ ?>
                    <script>
                      document.getElementById('siteweb').value ="<?php echo $rep['site_web']; ?>";
                    </script>
                  <?php } ?>
                </div></td></tr>
                <tr><td></td> <td>
                  <button class="btn btn-secondary btn-block" type="submit" name="button">Valider</button></td><tr>
                    </form>
              </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                </div>
              </div>
            </div>
          </div>
          <!-- Information media sociaux-->
          <h3 class="text-center">Media Sociaux<a data-toggle="modal" data-target="#social" href="#"> <i class="fa fa-edit"></i></a></h3>
          <br>
          <div class="media-sociaux col-lg12 offset-lg-2">
            <div class="row">

              <div class="col-sm-6 ">
                  <h5>Facebook </h5>

              </div>
              <div class="col-sm-6">
                <p><?php echo $rep['facebook'] ?></p>
             </div>

              <div class="col-sm-6">
                <h5>Instagram</h5>

              </div>
              <div class="col-sm-6">
                <p><?php echo $rep['instagram'] ?></p>
              </div>
              <div class="col-sm-6">
                <h5> WhatsApp</h5>
              </div>
              <div class="col-sm-6">
                <p><?php echo $rep['whatsapp'] ?></p>
              </div>
              <div class="col-sm-6">
                <h5> Telegram</h5>
              </div>
              <div class="col-sm-6">
                <p><?php echo $rep['telegram'] ?></p>
              </div>

              <div class="col-sm-6">
                <h5>Twitter</h5>

              </div>
              <div class="col-sm-6">
                <p><?php echo $rep['twitter'] ?></p>
              </div>

              <div class="col-sm-6">
                <h5>TikTok</h5>

              </div>
              <div class="col-sm-6">
                <p><?php echo $rep['tiktok'] ?></p>
              </div>

              <div class="col-sm-6">
                <h5>Mon Blog</h5>

              </div>
              <div class="col-sm-6">
                <p><?php echo $rep['blog'] ?></p>
              </div>

              <div class="col-sm-6">
                <h5> Linkdin</h5>
              </div>
              <div class="col-sm-6">
                <p><?php echo $rep['linkedin'] ?></p>
              </div>
              <div class="col-sm-6">
                <h5> SnapChat</h5>
              </div>
              <div class="col-sm-6">
                <p><?php echo $rep['snapchat'] ?></p>
              </div>
              <div class="col-sm-6">
                <h5> Youtube</h5>
              </div>
              <div class="col-sm-6">
                <p><?php echo $rep['youtube'] ?></p>
              </div>
            </div>
          </div>
          <div class="modal fade" id="social" tabindex="-1" role="dialog" aria-labelledby="socialaria" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="socialaria">Les Medias Sociaux</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                <table style="width:100%">
                <form class="form-control" action="update.php?id=<?php echo $rep['id'].'&social=jhkjhkj88kjhkjJEE33kjK'; ?>" method="post" enctype="multipart/form-data">
                  <tr><td><label for="">Facebook:</label> </td><td><div class="form-group">
                    <input class="form-control form-control-line" id="facebook" placeholder="Facebook" type="text" name="facebook" >
                    <?php if(isset($rep['facebook']) AND $rep['facebook']!=''){ ?>
                    <script>
                      document.getElementById('facebook').value ="<?php echo $rep['facebook']; ?>";
                    </script>
                  <?php } ?>
                  </div></td></tr>
                  <tr><td><label for="">Instagram:</label> </td><td><div class="form-group">
                    <input class="form-control form-control-line" id="instagram" placeholder="instagram" type="text" name="instagram" >
                    <?php if(isset($rep['instagram']) AND $rep['instagram']!=''){ ?>
                    <script>
                      document.getElementById('instagram').value ="<?php echo $rep['instagram']; ?>";
                    </script>
                  <?php } ?>
                  </div></td></tr>
                  <tr><td><label for="">WhatsApp:</label> </td><td><div class="form-group">
                    <input class="form-control form-control-line" id="whatsapp" placeholder="whatsapp" type="text" name="whatsapp" >
                    <?php if(isset($rep['whatsapp']) AND $rep['whatsapp']!=''){ ?>
                    <script>
                      document.getElementById('whatsapp').value ="<?php echo $rep['whatsapp']; ?>";
                    </script>
                  <?php } ?>
                  </div></td></tr>
                  <tr><td><label for="">Telegram:</label> </td><td><div class="form-group">
                    <input class="form-control form-control-line" id="telegram" placeholder="telegram" type="text" name="telegram" >
                    <?php if(isset($rep['telegram']) AND $rep['telegram']!=''){ ?>
                    <script>
                      document.getElementById('telegram').value ="<?php echo $rep['telegram']; ?>";
                    </script>
                  <?php } ?>
                  </div></td></tr>
                  <tr><td><label for="">Twitter:</label> </td><td><div class="form-group">
                    <input class="form-control form-control-line" id="twitter" placeholder="twitter" type="text" name="twitter" >
                    <?php if(isset($rep['twitter']) AND $rep['twitter']!=''){ ?>
                    <script>
                      document.getElementById('twitter').value ="<?php echo $rep['twitter']; ?>";
                    </script>
                  <?php } ?>
                  </div></td></tr>
                  <tr><td><label for="">Tiktok:</label> </td><td><div class="form-group">
                    <input class="form-control form-control-line" id="tiktok" placeholder="tiktok" type="text" name="tiktok" >
                    <?php if(isset($rep['tiktok']) AND $rep['tiktok']!=''){ ?>
                    <script>
                      document.getElementById('tiktok').value ="<?php echo $rep['tiktok']; ?>";
                    </script>
                  <?php } ?>
                  </div></td></tr>
                  <tr><td><label for="">Blog:</label> </td><td><div class="form-group">
                    <input class="form-control form-control-line" id="blog" placeholder="blog" type="text" name="blog" >
                    <?php if(isset($rep['blog']) AND $rep['blog']!=''){ ?>
                    <script>
                      document.getElementById('blog').value ="<?php echo $rep['blog']; ?>";
                    </script>
                  <?php } ?>
                  </div></td></tr>
                  <tr><td><label for="">Linkedin:</label> </td><td><div class="form-group">
                    <input class="form-control form-control-line" id="linkedin" placeholder="linkedin" type="text" name="linkedin" >
                    <?php if(isset($rep['linkedin']) AND $rep['linkedin']!=''){ ?>
                    <script>
                      document.getElementById('linkedin').value ="<?php echo $rep['linkedin']; ?>";
                    </script>
                  <?php } ?>
                  </div></td></tr>
                  <tr><td><label for="">SnapChat:</label> </td><td><div class="form-group">
                    <input class="form-control form-control-line" id="snapchat" placeholder="snapchat" type="text" name="snapchat" >
                    <?php if(isset($rep['snapchat']) AND $rep['facebook']!=''){ ?>
                    <script>
                      document.getElementById('snapchat').value ="<?php echo $rep['snapchat']; ?>";
                    </script>
                  <?php } ?>
                  </div></td></tr>
                  <tr><td><label for="">Youtube:</label> </td><td><div class="form-group">
                    <input class="form-control form-control-line" id="youtube" placeholder="youtube" type="text" name="youtube" >
                    <?php if(isset($rep['youtube']) AND $rep['youtube']!=''){ ?>
                    <script>
                      document.getElementById('youtube').value ="<?php echo $rep['youtube']; ?>";
                    </script>
                  <?php } ?>
                  </div></td></tr>
                  <tr><td></td><td><button class="btn btn-secondary btn-block" type="submit" name="button">Valider</button></td></tr>
                </form>
              </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php }$req->closeCursor(); ?>
            <!-- /.box-body -->
          </div>
        </div>
      </div>
      <!-- Main row -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer text-center">
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
     <a href="pages_registred.php">COMMANDER UNE CARTE</a>
    </div>
  </footer>
</div>
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
