<?php session_start(); include('link_css.php'); include('link_base.php'); ?>
<body class="hold-transition skin-blue sidebar-mini">
    <!-- Main content -->
    <br><br>
    <div class="content">
      <form class="form-inline teaxt-align:right" action="result.php?value=kkhj6877hhYTT77ggghjhgj778GGT" method="post">
        <input class="form-control mr-sm-2" type="search" name="search" id="search" placeholder="Search" aria-label="Search">
        <button style="" class="btn btn-outline-success my-2 my-sm-0" type="submit">Recherche</button>
        <div id="list" style="z-index: 0; position:absolute; color:black; background-color:white; top:100px"></div>
      </form>
      <div class="info-box">
        <h4 class="text-black text-center ">Liste des utilisateurs </h4>
        <a href="formulair_particulier.php">
          <button type="button" class="btn btn-success">Ajouter un nouveau utilisateur</button>
        </a>
      </div>
       <p>Exporter les données en CSV, Excel, PDF & Print</p>
      <div class="table-responsive">
                  <table id="example2" class="table table-bordered table-hover" data-name="cool-table">
                    <thead>
                      <tr>
                        <th>ID #</th>
                        <th>Nom complet</th>
                        <th>Email</th>
                        <th>Télephone</th>
                        <th>Compagnie</th>
                        <th>Poste occupé</th>
                        <th>Profession</th>
                        <th>Adresse</th>
                        <th>Date de création</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $req=$bdd->query('select * from particulier'); $count=0;
                      while ($rep=$req->fetch()) {
                        ?>
                      <tr>
                        <td><?php echo ++$count; ?></td>
                        <td><?php echo $rep['name_all'] ?></td>
                        <td><?php echo $rep['email'] ?></td>
                        <td><?php echo $rep['numero'] ?></td>
                        <td><?php echo $rep['compagnie'] ?></td>
                        <td><?php echo $rep['poste_occupe'] ?></td>
                        <td><?php echo $rep['profession'] ?></td>
                        <td><?php echo $rep['adresse'] ?></td>
                        <td><?php echo $rep['date_creation'] ?></td>
                        <td><span class="label label-default"><?php if($rep['etat']){ echo "Activé"; }else{ echo "Désactivé"; } ?></span></td>
                        <td>
                          <a href="profile-particulier/profil_particulier.php?pseudo=<?php echo $rep['name_user']; ?>"><i class="fa fa-eye"></i></a>
                          <a href="page-profile-particulier.php?id=<?php echo $rep['id']; ?>"><i class="fa fa-edit"></i></a>
                          <a href="particulier_delete.php?id=<?php echo $rep['id']; ?>"><i class="fa fa-trash"></i></a>
                          <a target="_blank" href="http://localhost/Ikcard_web/profile-particulier/codeqr.php?pseudo=<?php echo $rep['name_user']; ?>"><i class="fa fa-code"></i></a>
                        </td>
                      </tr>
                      <?php
                    }$req->closeCursor();
                     ?>
                    </tbody>
                  </table>
                  </div>
      </div>


  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="copyright text-center">
      &copy; Copyright <strong>IKACARD</strong>. 2022 All Rights Reserved
    </div>
    <div class="credits text-center">
     <a href="pages_registred.php">COMMANDER UNE CARTE</a>
    </div>
<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="dist/js/jquery.min.js"></script>

<!-- v4.0.0-alpha.6 -->
<script src="dist/bootstrap/js/bootstrap.min.js"></script>

<!-- template -->
<script src="dist/js/niche.js"></script>

<!-- DataTable -->
<script src="dist/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="dist/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script src="dist/plugins/table-expo/filesaver.min.js"></script>
<script src="dist/plugins/table-expo/xls.core.min.js"></script>
<script src="dist/plugins/table-expo/tableexport.js"></script>
<script>
$("table").tableExport({formats: ["xlsx","xls", "csv", "txt"],    });
</script>

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
