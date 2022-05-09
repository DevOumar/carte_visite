<?php session_start();
include("link_base.php");

$req=$bdd->prepare('SELECT * from utilisateur where email=? AND password=?');
$req->execute(array($_POST['email'],$_POST['pass']));
if($rep=$req->fetch()){
  $_SESSION['id']=$rep['id'];
  $_SESSION['type']=$rep['type'];
  $_SESSION['nom']=$rep['nom'];
  $_SESSION['prenom']=$rep['prenom'];
  $_SESSION['email']=$rep['email'];
  $_SESSION['photo']=$rep['photo'];
  $_SESSION['ikcard']='tiuyuiuhtt57667HJGhghj5575';
    header('Location:admin-index.php');
}else{
  header("Location:index.php?login=dweeeffff4999JJJ99JJ99889JJJJ8888ybghghdhf76575dtt");
}
 ?>
