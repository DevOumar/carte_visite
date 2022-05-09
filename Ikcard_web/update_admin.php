<?php include('link_base.php');

if(isset($_GET['photo']) AND file_exists('images_user/'.$_GET['photo'])){
  $nom=$_FILES['photo']['name'];
  $extension= substr(strrchr($nom,'.'),1);
  $extensions = array("jpg","JPG","jpeg","JPEG","PNG", "png", "GIF", "gif");
  $name=date('Ymdhmis');
  $dest='images_user/'.$name.'.'.$extension;
  $adr=$_FILES['photo']['tmp_name'];
  $req=$bdd->prepare('UPDATE utilisateur SET photo=? where id=?');
  if(in_array($extension,$extensions) AND move_uploaded_file($adr,$dest) AND $req->execute(array($name.'.'.$extension,$_GET['id']))){
    unlink('images_user/'.$_GET['photo']);
    header('Location:admin-profile.php?id='.$_GET['id'].'&ok');
  }
}elseif(isset($_GET['perso'])){
  $nom=$_POST['nom'];$prenom=$_POST['prenom'];$email=$_POST['email'];$numero=$_POST['numero'];
  $adresse=$_POST['adresse'];$role=$_POST['role'];
  $req=$bdd->prepare('UPDATE utilisateur SET nom=?,prenom=?,numero=?,email=?,adresse=?,role=? WHERE id=?');
  $req->execute(array($nom,$prenom,$numero,$email,$adresse,$role,$_GET['id']));
  header('Location:admin-profile.php?id='.$_GET['id'].'&valider=ok');
}
   ?>
