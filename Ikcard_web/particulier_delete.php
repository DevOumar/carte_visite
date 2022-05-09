<?php include('link_base.php');
  $req=$bdd->prepare('DELETE from particulier where id=?');
  if($req->execute(array($_GET['id']))){
    header('Location:admin-liste_utilisateurs.php?etat=succes');
  }else{
    header('Location:admin-liste_utilisateurs.php?etat=fail');
  }
 ?>
