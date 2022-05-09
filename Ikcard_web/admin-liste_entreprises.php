<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Liste des entreprises</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />

<!-- v4.0.0-alpha.6 -->
<link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Theme style -->
<link rel="stylesheet" href="dist/css/style.css">
<link rel="stylesheet" href="dist/css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="dist/css/et-line-font/et-line-font.css">
<link rel="stylesheet" href="dist/css/themify-icons/themify-icons.css">
<link rel="stylesheet" href="dist/plugins/hmenu/ace-responsive-menu.css">

<!-- DataTables -->
<link rel="stylesheet" href="dist/plugins/datatables/css/dataTables.bootstrap.min.css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
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
      
    </div>
  
    
    <!-- Main content -->
    <div class="content">
      <div class="info-box">
        <h4 class="text-black text-center">Liste des entreprises </h4>
        <a href="formulaire_particulier.php">
          <button type="button" class="btn btn-success">Ajouter une entreprise</button>
        </a>
      </div>
       <p>Exporter les données en CSV, Excel, PDF & Print</p>
      <div class="table-responsive">
                  <table id="example2" class="table table-bordered table-hover" data-name="cool-table">
                    <thead>
                      <tr>
                        <th>ID #</th>
                        <th>Nom complet</th>
                        <th>Nom d'utilisateur</th>
                        <th>Télephone</th>
                        <th>Compagnie</th>
                        <th>Poste occupé</th>
                        <th>Spécialité</th>
                        <th>Adresse</th>
                        <th>Date de création</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>0002</td>
                        <td>Seyba Sissoko</td>
                        <td>Seyba22</td>
                        <td>+22374866248</td>
                        <td>Sistra-Technologies</td>
                        <td>Directeur général</td>
                        <td>Bioinformaticien</td>
                        <td>Samè, Bamako, Mali</td>
                        <td>20-09-2017</td>
                        <td><span class="label label-default">Abonné</span></td>
                        <td>
                          <a href=""><i class="fa fa-eye"></i></a> 
                          <a href=""><i class="fa fa-edit"></i></a>
                          <a href=""><i class="fa fa-trash"></i></a>
                        </td> 
                      </tr>
                      <tr>
                        <td>0001</td>
                        <td>Seyba Sissoko</td>
                        <td>Seyba22</td>
                        <td>+22374866248</td>
                        <td>Sistra-Technologies</td>
                        <td>Directeur général</td>
                        <td>Bioinformaticien</td>
                        <td>Samè, Bamako, Mali</td>
                        <td>20-09-2017</td>
                        <td><span class="label label-default">Non abonné</span></td>
                        <td>
                          <a href=""><i class="fa fa-eye"></i></a> 
                          <a href=""><i class="fa fa-edit"></i></a>
                          <a href=""><i class="fa fa-trash"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>0003</td>
                        <td>Seyba Sissoko</td>
                        <td>Seyba22</td>
                        <td>+22374866248</td>
                        <td>Sistra-Technologies</td>
                        <td>Directeur général</td>
                        <td>Bioinformaticien</td>
                        <td>Samè, Bamako, Mali</td>
                        <td>20-09-2017</td>
                        <td><span class="label label-default">Non abonné</span></td>
                        <td>
                          <a href=""><i class="fa fa-eye"></i></a> 
                          <a href=""><i class="fa fa-edit"></i></a>
                          <a href=""><i class="fa fa-trash"></i></a>
                        </td>
                      </tr>
                      
                    </tbody>
                  </table>
                  </div>
      </div>
      
      
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