<?php session_start(); include('../link_base.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Profile Utilisateur</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="stylesheet" href="../dist/css/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="..dist/css/et-line-font/et-line-font.css">
	<link rel="stylesheet" href="..dist/css/themify-icons/themify-icons.css">
</head>
<body>
  <?php if(isset($_GET['pseudo'])){ ?>
	<section class="main-content" style="width:100%">
		<div class="container" style="width:100%">
			<div class="row" style="width:100%">
				<div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-8 offset-lg-2" style="width:100%">
					<div  style="text-align:center;width:100%;position: relative;left:0%"
					class="profile-card card rounded-lg shadow p-4 p-xl-5 mb-4 text-center position-relative overflow-hidden">

          <img class="text-center"  style="text-align:center;position:relative; bottom:50px" src="qrcode/<?php echo $_GET['pseudo'].'.png'; ?>" alt="">

					</div>

				</div>

			</div>
		</div>

	</section>


	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
<?php }else{

	?>
	<p class="alert alert-danger">Pas de correspondance.</p>
	<a href="../liste_utilisateurs.php"> Liste des utilisateurs</a>
<?php
} ?>
</html>
