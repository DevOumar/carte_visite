<?php include('link_base.php');
$requete=$bdd->prepare('SELECT * FROM particulier where name_user=?');
$requete->execute(array($_POST['pseudo']));
if($reponse=$requete->fetch()){
    $pseudo=$reponse['name_user'];
}
$requete->CloseCursor();
$requetes=$bdd->prepare('SELECT * FROM particulier where email=?');
$requetes->execute(array($_POST['email']));
if($reponses=$requetes->fetch()){
  $email=$reponses['email'];
}
$requetes->CloseCursor();
if(isset($email) AND $email==$_POST['email']){
  header('Location:formulair_particulier.php?Erreur=kjhkjhkj8687HGHGGHJhjgjg7765g6g78HGHGHFr&email='.$_POST['email']);
}elseif(isset($pseudo) AND $pseudo==$_POST['pseudo']){
  header('Location:formulair_particulier.php?Erreur=kjhkjhkj8687HGHGGHJhjgjg7765g6g78HGHGHFr&pseudo='.$_POST['pseudo']);
}else{
$nom=$_FILES['photo']['name'];
   $extension= substr(strrchr($nom,'.'),1);
   $extensions = array("jpg","JPG","jpeg","JPEG","PNG", "png", "GIF", "gif");
$pseudo=$_POST['pseudo'];$complet=$_POST['complet'];$email=$_POST['email'];$numero=$_POST['numero'];
$fax=$_POST['fax'];$adresse=$_POST['adresse'];$compagnie=$_POST['compagnie'];$poste=$_POST['poste'];
$facebook=$_POST['facebook'];$instagram=$_POST['instagram'];$youtube=$_POST['youtube'];$linkedin=$_POST['linkedin'];
$snapchat=$_POST['snapchat'];$blog=$_POST['blog'];$twitter=$_POST['twitter'];$tiktok=$_POST['tiktok'];
$adr=$_FILES['photo']['tmp_name'];
$name=date('Ymdhmis');
$dest='images_particulier/'.$name.'.'.$extension;
$req=$bdd->prepare('INSERT into particulier(name_user,name_all,email,numero,poste_occupe,profession,fax,
  adresse,compagnie,site_web,whatsapp,facebook,instagram,youtube,linkedin,snapchat,blog,twitter,tiktok,photo,etat)
  VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
  if(in_array($extension,$extensions) AND move_uploaded_file($adr,$dest)){
    $req->execute(array($pseudo,$complet,$email,$numero,$poste,$_POST['profession'],$fax,$adresse,$compagnie,
    $_POST['siteweb'],$_POST['whatsapp'],$facebook,$instagram,$youtube,$linkedin,$snapchat,$blog,$twitter,$tiktok,$name.'.'.$extension,1));

    header('Location:save_succes.php?succeful=hjh6876hjgh778hjgjh78687&pseudo='.$_POST['pseudo']);
  }else{
    header('Location:formulair_particulier.php?Erreur=kjhkjhkj8687HGHGGHJhjgjg7765g6g78HGHGHFr');
  }
}$requete->closeCursor();
 ?>
