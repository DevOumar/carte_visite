<?php include('link_base.php');
$requete=$bdd->prepare('SELECT * FROM utilisateur where email=?');
$requete->execute(array($_POST['email']));
if($reponse=$requete->fetch()){
    $pseudo=$reponse['email'];
}$requete->CloseCursor();
if(isset($email) AND $email==$_POST['email']){
  header('Location:ajout-admin.php?Erreur=kjhkjhkj8687HGHGGHJhjgjg7765g6g78HGHGHFr&email='.$_POST['email']);
}else{
$nom=$_FILES['photo']['name'];
$extension= substr(strrchr($nom,'.'),1);
$extensions = array("jpg","JPG","jpeg","JPEG","PNG", "png", "GIF", "gif");
$nom=$_POST['nom'];$prenom=$_POST['prenom'];$email=$_POST['email'];$numero=$_POST['numero'];
$adresse=$_POST['adresse'];$role=$_POST['role'];
$adr=$_FILES['photo']['tmp_name'];
$name=date('Ymdhmis');
$dest='images_user/'.$name.'.'.$extension;
$tokken=md5($_POST['email'].$_POST['nom'].$_POST['prenom']);
$req=$bdd->prepare('INSERT into utilisateur(nom,prenom,numero,email,photo,password,adresse,role,tokken,valider,ligne,date_last,type)
VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)');
  if(in_array($extension,$extensions) AND move_uploaded_file($adr,$dest)){
    $req->execute(array($nom,$prenom,$numero,$email,$name.'.'.$extension,$_POST['cle'],$adresse,
    $_POST['role'],$tokken,0,0,date('Y/m/d H.i.s'),'admin'));
    header('Location:ajout-admin.php?succeful=hjh6876hjgh778hjgjh78687&pseudo='.$_POST['email']);
    }else{
    header('Location:ajout-admin.php?Erreur=kjhkjhkj8687HGHGGHJhjgjg7765g6g78HGHGHFr');
    }
}$requete->closeCursor();
 ?>
