<?php include('link_base.php');
  $req=$bdd->prepare('UPDATE particulier set etat=? where id=?');
  if(isset($_GET['etat']) AND $_GET['etat']){
    $req->execute(array(0,$_GET['id']));
    header('Location:liste_utilisateurs.php?etat=succes');
  }else{
    $req->execute(array(1,$_GET['id']));
    header('Location:liste_utilisateurs.php?etat=succes');
  }
 ?>
