<?php include('link_base.php');

if(isset($_GET['photo']) AND file_exists('images_particulier/'.$_GET['photo'])){
  $nom=$_FILES['photo']['name'];
  $extension= substr(strrchr($nom,'.'),1);
  $extensions = array("jpg","JPG","jpeg","JPEG","PNG", "png", "GIF", "gif");
  $name=date('Ymdhmis');

  $dest='images_particulier/'.$name.'.'.$extension;
  $adr=$_FILES['photo']['tmp_name'];
  $req=$bdd->prepare('UPDATE particulier SET photo=? where id=?');
  if(in_array($extension,$extensions) AND move_uploaded_file($adr,$dest) AND $req->execute(array($name.'.'.$extension,$_GET['id']))){
    unlink('images_particulier/'.$_GET['photo']);
    header('Location:page-profile-particulier.php?id='.$_GET['id'].'&ok');
  }else{
    header('Location:page-profile-particulier.php?id='.$_GET['id']);
  }
}elseif(isset($_GET['perso'])){
  $complet=$_POST['complet'];$email=$_POST['email'];$numero=$_POST['numero'];
  $fax=$_POST['fax'];$adresse=$_POST['adresse'];$compagnie=$_POST['compagnie'];$poste=$_POST['poste'];
  $req=$bdd->prepare('UPDATE particulier SET name_all=?, email=?,numero=?,poste_occupe=?,profession=?,fax=?,adresse=?,compagnie=?,site_web=? WHERE id=?');
  $req->execute(array($complet,$email,$numero,$poste,$_POST['profession'],$fax,$adresse,$compagnie,$_POST['siteweb'],$_GET['id']));
  header('Location:page-profile-particulier.php?id='.$_GET['id'].'&valider=ok');
}else {
  $facebook=$_POST['facebook'];$instagram=$_POST['instagram'];$youtube=$_POST['youtube'];$linkedin=$_POST['linkedin'];$whatsapp=$_POST['whatsapp'];
  $snapchat=$_POST['snapchat'];$blog=$_POST['blog'];$twitter=$_POST['twitter'];$tiktok=$_POST['tiktok'];$telegram=$_POST['telegram'];
  $req=$bdd->prepare('UPDATE particulier SET whatsapp=?, facebook=?,instagram=?,youtube=?,linkedin=?,snapchat=?,blog=?,twitter=?,tiktok=?,telegram=? WHERE id=?');
  $req->execute(array($whatsapp,$facebook,$instagram,$youtube,$linkedin,$snapchat,$blog,$twitter,$tiktok,$telegram,$_GET['id']));
  header('Location:page-profile-particulier.php?id='.$_GET['id'].'&valider=ok');

}
   ?>
