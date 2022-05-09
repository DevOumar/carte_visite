<?php session_start(); include('link_css.php'); include('link_base.php'); $arrayName = array('Principal' =>'Admin Principal','1'=>'Admin de niveau 1', '2'=>'Admin de niveau 2',''=>'Pas definis'); ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper boxed-wrapper">
  <?php include("admin-header.php"); $req=$bdd->prepare('SELECT * FROM utilisateur where id=?');
  $req->execute(array($_GET['id'])); if($rep=$req->fetch()){ ?>
    <div class="content-wrapper">
    <div class="content">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="user-profile-box m-b-3">
            <div class="box-profile text-white"> <img class="profile-user-img img-responsive img-circle m-b-2" src="images_user/<?php echo $rep['photo'] ?>" alt="User profile picture">
            <a href="#"><h5 data-toggle="modal" data-target="#photo" class="text-center">Modifier Photo de profile</h5></a>
          </div>
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
                <form class="form" action="update_admin.php?id=<?php echo $rep['id'].'&photo='.$rep['photo']; ?>" method="post" enctype="multipart/form-data">
                  <input type="file" name="photo" value="">
                  <button class="btn btn-secondary btn-block" type="submit" name="button">Valider</button>
                </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                </div>
              </div>
            </div>
          </div>
          <div class="info-box">
          <h3 class="text-center" data-toggle="modal" data-target="#info">Information personnelles <a href="#"><i class="fa fa-edit"></i></a></h3>
            <div class="box-body"> <strong><h4>Nom Complet</h4></strong>
              <p class="text-muted"><?php echo $rep['nom'].' '.$rep['prenom']; ?></p>
              <hr>
              <strong><h4>Role</h4></strong>
              <p class="text-muted"><?php $role=$rep['role']; echo  $arrayName[$role]; ?></p>
              <hr>
              <strong><h4>Email address</h4> </strong>
              <p class="text-muted"><?php echo $rep['email']; ?></p>
              <hr>
              <strong><h4>Télephone</h4></strong>
              <p><?php echo $rep['numero']; ?></p>
              <hr>
              <strong><h4>Adresse</h4></strong>
              <p><?php echo $rep['adresse']; ?></p>
            </div>
            <!-- /.box-body -->
          </div>
          <div class="modal fade" id="info" tabindex="-1" role="dialog" aria-labelledby="persoaria" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="persoaria">Changer les infos</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <table style="width:100%">
                <form class="form-horizontal form-material" action="update_admin.php?id=<?php echo $rep['id'].'&perso=hkj876876hggh5f54fdfGH665FF66iII87ll'; ?>" method="post" enctype="multipart/form-data">
                  <tr><td><label for="">Nom :</label> </td><td><div class="form-group">
                    <input class="form-control form-control-line" id="nom" type="text" name="nom" >
                    <script>
                      document.getElementById('nom').value ="<?php echo $rep['nom']; ?>";
                    </script>
                  </div></td></tr>
                  <tr><td><label for="">Prenom :</label> </td><td><div class="form-group">
                    <input class="form-control form-control-line" id="prenom" type="text" name="prenom" >
                    <script>
                      document.getElementById('prenom').value ="<?php echo $rep['prenom']; ?>";
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
                  <tr><td><label for="">Adresse:</label> </td><td><div class="form-group">
                    <input class="form-control form-control-line" id="adresse" type="text" name="adresse" >
                    <script>
                      document.getElementById('adresse').value ="<?php echo $rep['adresse']; ?>";
                    </script>
                  </div></td></tr>
                  <tr><td><label for="">Niveau d'Accès:</label> </td><td><div class="form-group">
                    <select class="form-control form-control-line"  placeholder="" type="text" name="role" >
                      <option <?php if (isset($rep['role']) AND $rep['role']=='Principal'): ?>
                        selected
                      <?php endif; ?> value="Principal">Admin Principal</option>
                      <option <?php if (isset($rep['role']) AND $rep['role']=='1'): ?>
                        selected
                      <?php endif; ?>  value="1">Niveau 1</option>
                      <option <?php if (isset($rep['role']) AND $rep['role']=='2'): ?>
                        selected
                      <?php endif; ?> value="2">Niveau 2</option>
                    </select>
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

          <?php include("footer.php");?>
        </div>

  <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->
<?php }$req->CloseCursor(); ?>
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
