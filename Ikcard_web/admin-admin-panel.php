<?php session_start(); include('link_css.php'); include('link_base.php'); ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper boxed-wrapper">
 <!-- Main Nav -->
<?php include("admin-header.php");?>
 <!-- End Main Nav -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>Dashboard</h1>
      <form class="form-inline teaxt-align:right" action="result.php?value=kkhj6877hhYTT77ggghjhgj778GGT" method="post">
          <input class="form-control mr-sm-2" type="search" name="search" id="search" placeholder="Search" aria-label="Search">
          <button style="" class="btn btn-outline-success my-2 my-sm-0" type="submit">Recherche</button>
          <div id="list" style="z-index: 99; position:absolute; color:black; background-color:white; top:90px"></div>
        </form>
    </div>


    <!-- Main content -->
    <div class="content">
      <div class="info-box">
        <h4 class="text-black text-center">Liste des Administrateurs </h4>
        <a href="ajout-admin.php">
          <button type="button" class="btn btn-success btn-block">Ajouter un administrateur</button>
        </a>
      </div>
       <p>Exporter les données en CSV, Excel, PDF & Print</p>
      <div class="table-responsive">
                  <table id="example2" class="table table-bordered table-hover" data-name="cool-table">
                    <thead>
                      <tr>
                        <th>ID #</th>
                        <th>Nom complet</th>
                        <th>Télephone</th>
                        <th>Email</th>
                        <th>Adresse</th>
                        <th>Date de création</th>
                        <th>Niveau d'accès</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php $req=$bdd->prepare("select * from utilisateur where type='admin' AND id!=? ");
                          $req->execute(array($_SESSION['id']));
                       $count=0;
                          while ($rep=$req->fetch()) {
                        ?>
                      <tr>
                        <td><?php echo ++$count; ?>01</td>
                        <td><?php echo $rep['nom'].' '.$rep['prenom']; ?></td>
                        <td><?php echo $rep['numero'] ?></td>
                        <td><?php echo $rep['email'] ?></td>
                        <td><?php echo $rep['adresse'] ?></td>
                        <td><?php echo $rep['date_create'] ?></td>
                        <td><?php echo $rep['role'] ?></td>
                        <td>
                            <a href="admin-profile.php?id=<?php echo $rep['id'];  ?>"><i  class="fa fa-eye"></i></a>
                            <a href="admin-profile.php?id=<?php echo $rep['id'];?>"><i  class="fa fa-edit"></i></a>
                            <a href="#"><i data-toggle="modal" data-target="#delete" class="fa fa-trash"></i></a>
                        </td>
                        <div style="" class="modal"  id="delete">
                           <div class="modal-dialog">
                              <div class="modal-content">
                                 <!-- Modal Header -->
                                 <div class="modal-header" style="text-align:center">
                                    <h4 class="modal-title" style="text-align:center">Suppression</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                 </div>
                                 <!-- Modal body -->
                                 <div class="modal-body center">
                                <a href="admin_delete.php?id=<?php echo $rep['id']; ?>">  <button type="button" class="btn btn-danger btn-block" name="button">Confirmer</button></a>
                                <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Annuler</button>
                                 </div>
                                 <!-- Modal footer -->
                              </div>
                           </div>
                        </div>

                      </tr>
                      <?php
                    }$req->closeCursor();
                     ?>
                    </tbody>
                  </table>
                  </div>
      </div>

<?php include('link_js.php'); ?>
  <!-- /.content-wrapper -->
  <?php include("footer.php");?>
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
  });
  $(document).ready(function () {
    $('#search').keyup( function () {
      var query = $(this).val();
      if(query != '')
      {
        $.ajax ( {
          url:"search.php",
          method: "POST",
          data:{query: query},
          success:function(data)
          {
            $('#list').fadeIn();
            $('#list').html(data);
          }
        });
      }
      else{
        $('#list').fadeOut();
        $('#list').html("");
      }
    });
    $(document).on('click', 'li', function()
    {
      $('#search').val($(this).text());
      $('#list').fadeOut ();
    });
  });
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
