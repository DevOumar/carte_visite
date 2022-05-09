<?php include('link_base.php');
  $req=$bdd->prepare('DELETE from utilisateur where id=?');
  if($req->execute(array($_GET['id']))){
    header('Location:admin-admin-panel.php?etat=succes');
  }else{
    header('Location:admin-admin-panel.php?etat=fail');
  }
 ?>
