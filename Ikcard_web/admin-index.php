<?php session_start(); include('link_css.php'); include('link_base.php'); ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper boxed-wrapper">


  <!-- Main Nav -->
  <?php include("admin-header.php");?>
  <!-- Main Nav -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>Dashboard</h1>
    </div>

    <!-- Main content -->
    <div class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="info-box bg-darkblue"> <span class="info-box-icon bg-transparent"><i class="ti-stats-up text-white"></i></span>
            <div class="info-box-content">
              <h6 class="info-box-text text-white">Nombre de visiteurs par jour</h6>
              <h1 class="text-white">1,150</h1>
              </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="info-box bg-green text-white"> <span class="info-box-icon bg-transparent"><i class="ti-face-smile"></i></span>
            <div class="info-box-content">
              <h6 class="info-box-text text-white">Nombre d'utilisateur</h6>
              <h1 class="text-white"><?php $req=$bdd->query('SELECT count(id) as nombrep from utilisateur');
              $rep=$req->fetch(); echo $rep['nombrep']; $req->CloseCursor(); ?></h1>
               </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="info-box bg-aqua"> <span class="info-box-icon bg-transparent"><i class="ti-face-smile"></i></span>
            <div class="info-box-content">
              <h6 class="info-box-text text-white">Nombre de particuliers</h6>
              <h1 class="text-white"><?php $req=$bdd->query('SELECT count(id) as nombrep from particulier');
              $rep=$req->fetch(); echo $rep['nombrep']; $req->CloseCursor(); ?></h1>
               </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="info-box bg-orange"> <span class="info-box-icon bg-transparent"><i class="ti-face-smile"></i></span>
            <div class="info-box-content">
              <h6 class="info-box-text text-white">Nombre d'entreprise</h6>
              <h1 class="text-white">8,188</h1>
                </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <div class="col-lg-7 col-xlg-9">
          <div class="info-box">
            <div class="d-flex flex-wrap">
              <div>
                <h4 class="text-black">Vue d'ensemble de l'analyse</h4>
              </div>
              <div class="ml-auto">
                <ul class="list-inline">
                  <li class="text-info"> <i class="fa fa-circle"></i> Entreprises</li> <li class="text-blue"> <i class="fa fa-circle"></i> Particuliers</li>
                </ul>
              </div>
            </div>
            <div>
              <canvas id="line-chart"></canvas>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-xlg-3">
          <div class="info-box">
            <div class="d-flex flex-wrap">
              <div>
                <h4 class="text-black">Nos visiteurs</h4>
              </div>
            </div>
            <div class="m-t-2">
            	<canvas id="pie-chart" height="210"></canvas>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="info-box">
            <h4 class="m-b-2 text-black">Recent Activities</h4>
            <div class="sl-item sl-primary">
              <div class="sl-content"><small class="text-muted"><i class="fa fa-user position-left"></i> 5 mins ago</small>
                <p>Lorem ipsum dolor sit amet, consectetur adip iscing elit. Nullam sagittis mattis arcu uspen disse.</p>
              </div>
            </div>
            <div class="sl-item sl-danger">
              <div class="sl-content"><small class="text-muted"><i class="fa fa-user position-left"></i> 8 mins ago</small>
                <p>Lorem ipsum dolor sit amet, consectetur adip iscing elit. Nullam sagittis mattis arcu uspen disse.</p>
              </div>
            </div>
            <div class="sl-item sl-success">
              <div class="sl-content"><small class="text-muted"><i class="fa fa-user position-left"></i> 10 mins ago</small>
                <p>Lorem ipsum dolor sit amet, consectetur adip iscing elit. Nullam sagittis mattis arcu uspen disse.</p>
              </div>
            </div>
            <div class="sl-item sl-warning">
              <div class="sl-content"><small class="text-muted"><i class="fa fa-user position-left"></i> 12 mins ago</small>
                <p>Lorem ipsum dolor sit amet, consectetur adip iscing elit. Nullam sagittis mattis arcu uspen disse.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="info-box">
            <div class="d-flex flex-wrap">
              <div>
                <h4 class="m-b-2 text-black">Line Chart with Area</h4>
              </div>
            </div>
           <div class="ct-line-chart" style="height:350px;"></div>
          </div>
        </div>
      </div>


                <!--second tab-->
                <div class="tab-pane" id="profile" role="tabpanel" aria-expanded="false">

      <div class="row">
      <div class="col-lg-4">
        <div class="soci-wid-box bg-twitter m-b-3">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <div class="col-lg-12 text-center">
                  <div class="sco-icon"><i class="ti-twitter-alt"></i></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio praesent libero sed cursus ante.</p>
                  <p class="text-italic pt-1">- John Doe -</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="col-lg-12 text-center">
                  <div class="sco-icon"><i class="ti-twitter-alt"></i></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio praesent libero sed cursus ante.</p>
                  <p class="text-italic pt-1">- John Doe -</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="col-lg-12 text-center">
                  <div class="sco-icon"><i class="ti-twitter-alt"></i></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio praesent libero sed cursus ante.</p>
                  <p class="text-italic pt-1">- John Doe -</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="soci-wid-box bg-facebook m-b-3">
          <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <div class="col-lg-12 text-center">
                  <div class="sco-icon"><i class="ti-facebook"></i></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio praesent libero sed cursus ante.</p>
                  <p class="text-italic pt-1">- John Doe -</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="col-lg-12 text-center">
                  <div class="sco-icon"><i class="ti-facebook"></i></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio praesent libero sed cursus ante.</p>
                  <p class="text-italic pt-1">- John Doe -</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="col-lg-12 text-center">
                  <div class="sco-icon"><i class="ti-facebook"></i></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio praesent libero sed cursus ante.</p>
                  <p class="text-italic pt-1">- John Doe -</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="soci-wid-box bg-google-plus m-b-3">
          <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <div class="col-lg-12 text-center">
                  <div class="sco-icon"><i class="ti-google"></i></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio praesent libero sed cursus ante.</p>
                  <p class="text-italic pt-1">- John Doe -</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="col-lg-12 text-center">
                  <div class="sco-icon"><i class="ti-google"></i></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio praesent libero sed cursus ante.</p>
                  <p class="text-italic pt-1">- John Doe -</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="col-lg-12 text-center">
                  <div class="sco-icon"><i class="ti-google"></i></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio praesent libero sed cursus ante.</p>
                  <p class="text-italic pt-1">- John Doe -</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
        </div>
      </div>
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

<!-- Chartjs JavaScript -->
<script src="dist/plugins/functions/dashboard2.js"></script>
<script src="dist/plugins/chartjs/chart.min.js"></script>

<!-- Chartjs JavaScript -->
<script src="dist/plugins/chartjs/chart.min.js"></script>
<script src="dist/plugins/chartjs/chart-int.js"></script>

<!-- Chartist JavaScript -->
<script src="dist/plugins/chartist-js/chartist.min.js"></script>
<script src="dist/plugins/chartist-js/chartist-plugin-tooltip.js"></script>
<script src="dist/plugins/functions/chartist-init.js"></script>

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
</body>
</html>
