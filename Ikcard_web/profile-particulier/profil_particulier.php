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
<?php
	if (!isset($_GET['id'])) {
		$_GET['id']=0;
	}
	if (!isset($_GET['email'])) {
		$_GET['email']='';
	}
	$req=$bdd->prepare('SELECT * from particulier where name_user=?  AND etat');
	$req->execute(array($_GET['pseudo']));
	if ($rep=$req->fetch()) {
		include('../phpqrcode/qrlib.php'); //On inclut la librairie au projet
		$lien='http://localhost/Ikcard_web/profile-particulier/profil_particulier.php?pseudo='.$rep['name_user']; // Vous pouvez modifier le lien selon vos besoins
		QRcode::png($lien,'qrcode/'.$rep['name_user'].'.png','H',7,7); // On crée notre QR Code
		$vcard['emails']=$rep['email'];$vcard['siteweb']=$rep['site_web'];
		$vcard['prenom']=$rep['name_all'];
		$vcard['name_user']=$rep['name_user'];
		$vcard['adresse']=$rep['adresse'];
		$vcard['mobiles']=$rep['numero'];
		$uid=md5($rep['name_all']);
		$date=date("Ymdhmis");
		$photo='../images_particulier/'.$rep['photo'];
		$etat = file_put_contents("../contacts/{$vcard['name_user']}.vcf",
		"BEGIN:VCARD
		VERSION:4.0
		N:{$vcard['prenom']}
		FN:{$vcard['prenom']}
		NICKNAME:{$vcard['name_user']}
		TEL;WORK;VOICE:{$vcard['mobiles']}
		TEL;HOME;VOICE:{$vcard['mobiles']}
		TEL;CELL;VOICE:{$vcard['mobiles']}
		ADR;HOME:;{$vcard['adresse']}
		EMAIL;PREF;INTERNET:{$vcard['emails']}
		URL;WORK:{$vcard['siteweb']}
		PHOTO;MEDIATYPE:{$photo}
		REV:$date
		UID:$uid
		END:VCARD");
 ?>
<body>
	<section class="main-content" style="width:100%">
		<div class="container" style="width:100%">
			<div class="row" style="width:100%">
				<div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-8 offset-lg-2" style="width:100%">
					<div  style="text-align:center;width:100%;position: relative;left:0%"
					class="profile-card card rounded-lg shadow p-4 p-xl-5 mb-4 text-center position-relative overflow-hidden">

						<div class="banner"></div>
							<div class="logo">
								<a href="../admin-liste_utilisateurs.php">
									<img src="img/logo-ikacard.jpg" alt="">
								</a>
							</div>
							<div class="debut">
								<img src="../images_particulier/<?php echo $rep['photo'];  ?>" alt="" class="img-circle mx-auto mb-6">
								<h3 class="mb-2"><?php echo $rep['name_all']; ?></h3>
								<h6><?php echo $rep['poste_occupe']; if (isset($rep['poste_occupe']) AND isset($rep['compagnie'])
								 AND $rep['compagnie']!='' AND $rep['poste_occupe']!=''): echo " à "; endif; echo $rep['compagnie']; ?></h6>
							</div>
							<div class="buttons">
								<a href="tel:223<?php echo $rep['numero']; ?>"><button  type="button" class="btn btn-primary">Appel</button></a>
								<a target="_blank" href="sms:223<?php echo $rep['numero'];?>&text="> <button  type="button" class="btn btn-primary">Message</button></a>
								<a href="mailto:<?php echo $rep['email'].'&subject=Information'; ?>"> <button  class="btn btn-primary">Email</button></a>
							</div>
							<div class="text-center mb-2" style="">
								<div class="info_personelle">
									<div class="telephone">
											<h5 ><i class="fa fa-phone"></i> Téléphone</h5>
											<a href="tel:223<?php echo $rep['numero']; ?>"><p ><?php echo $rep['numero']; ?></p></a>
									</div>
									<div class="email">
										<h5><i class="fa fa-envelope "><span></span></i> Email</h5>
										<a target="_blank" href="mailto:noreply@1formatik.com"><p><?php echo $rep['email']; ?></p></a>
									</div>
									<?php if (isset($rep['profession']) AND $rep['profession']!=''): ?>
									<div class="profession">
										<h5><i class="fa fa-user-md "></i> Profession</h5>
										<p><?php echo $rep['profession']; ?></p>
									</div>
										<?php endif; ?>
										<?php if (isset($rep['compagnie']) AND $rep['compagnie']!=''): ?>
									<div class="Compagnie">
										<h5><i class="fa fa-xing-square"></i> Compagnie</h5>
										<p><?php echo $rep['compagnie']; ?></p>
									</div>
									<?php endif; ?>
										<?php if (isset($rep['site_web']) AND $rep['site_web']!=''): ?>
									<div class="siteweb">
										<h5><i class="fa fa-globe mr-2"></i> Site Web</h5>
										<a target="_blank" href="<?php echo $rep['site_web']; ?>"><p style=""><?php echo $rep['site_web']; ?></p></a>
									</div>
									<?php endif; ?>
									<div class="adress">
										<h5><i class="fa fa-map-marker"></i> Adresse</h5>
										<p> <?php echo $rep['adresse']; ?></p>
									</div>
										<?php if (isset($rep['fax']) AND $rep['fax']!=''): ?>
									<div class="fax">
										<h5><i class="fa fa-map-marker"></i> Fax</h5>
										<p> <?php echo $rep['fax']; ?></p>
									</div>
									<?php endif; ?>
								</div>
								<h5 class="media-sociaux text-center">Media sociaux</h5>
									<div class="social-links d-flex justify-content-center">
										<?php if(isset($rep['facebook']) AND $rep['facebook']!=''){ ?>
										<a target="_blank" href="<?php  echo $rep['facebook'];?>" class="mx-2"><img src="img/social/facebook.svg" alt="Facebook"></a><?php } ?>
										<?php if(isset($rep['linkedin']) AND $rep['linkedin']!=''){ ?>
										<a target="_blank" href="<?php  echo $rep['linkedin'];?>" class="mx-2"><img src="img/social/linkedin.svg" alt="Linkedin"></a><?php } ?>
										<?php if(isset($rep['youtube']) AND $rep['youtube']!=''){ ?>
										<a target="_blank" href="<?php  echo $rep['youtube'];?>" class="mx-2"><img src="img/social/youtube.svg" alt="youtube"></a><?php } ?>
										<?php if(isset($rep['tiktok']) AND $rep['tiktok']!=''){ ?>
										<a target="_blank" href="<?php  echo $rep['tiktok'];?>" class="mx-2"><img src="img/social/tiktok.png" alt="tiktok"></a><?php } ?>
										<?php if(isset($rep['whatsapp']) AND $rep['whatsapp']!=''){ ?>
										<a target="_blank" href="<?php  echo $rep['whatsapp'];?>" class="mx-2"><img src="img/social/whatsapp.png" alt="whatsapp"></a><?php } ?>
										<?php if(isset($rep['twitter']) AND $rep['twitter']!=''){ ?>
										<a target="_blank" href="<?php  echo $rep['twitter'];?>" class="mx-2"><img src="img/social/twitter.png" alt="twitter"></a><?php } ?>
										<?php if(isset($rep['telegram']) AND $rep['telegram']!=''){ ?>
										<a target="_blank" href="<?php  echo $rep['telegram'];?>" class="mx-2"><img src="img/social/telegram.png" alt="snapchat"></a><?php } ?>
										<?php if(isset($rep['snapchat']) AND $rep['snapchat']!=''){ ?>
										<a target="_blank" href="<?php  echo $rep['snapchat'];?>" class="mx-2"><img src="img/social/snapchat.png" alt="snapchat"></a><?php } ?>
									</div>
							</div>
							<div class="download">
								<div class="row-fluid">
									<a <?php echo "href=..\contacts/{$rep['name_user']}.vcf"; ?> download><button type="button" class="btn-enregistrer">Enregistrer le contact</button></a>
								</div>
							</div>
							<div class="download">
								<div class="row-fluid">
									<a target="_blank" href="http://localhost/Ikcard_web/profile-particulier/codeqr.php?pseudo=<?php echo $rep['name_user']; ?>"><button type="button" class="btn-enregistrer">Afficfer Qr Code</button></a>
								</div>
								<div class="row-fluid">
									<a download target="_blank" href="qrcode/<?php echo $rep['name_user'].'.png'; ?>"><button type="button" class="btn-enregistrer">Telechager COde QR</button></a>
								</div>
							</div>

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
} $req->closeCursor(); ?>
</html>
