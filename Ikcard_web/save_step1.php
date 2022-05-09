<?php
include('link_base.php');
$exist=false;
$destinateur=$_POST['email'];
$expediteur='abdoutra62@gmail.com';
$objet='Activation';
$tokken=md5($_POST['email'].$_POST['nom'].$_POST['prenom']);
$message='<h1>Ikcard Vous remercie, pour votre inscription</h1> ,'."\n".'Veuillez cliquez sur
ce <a href="activation.php/id=hgkjhkjkj879871kjhkjh21jhj22&op='.$tokken.'">
 lien</a>'."\n".'<a href="activation.php/id=hgkjhkjkj879871kjhkjh21jhj22&op='.$tokken.'"> Activer mon compte</a>';
$req=$bdd->query('select email,valider from utilisateur');
while ($rep=$req->fetch()) {
  if($rep['email']==$_POST['email']){
    $exist=true;
    $valider=$rep['valider'];
  }
}$req->CloseCursor();
$req1=$bdd->prepare('INSERT INTO utilisateur (nom,prenom,email,password,tokken,valider,ligne,date_last,type)
 VALUES(?,?,?,?,?,?,?,?,?) ');
if(!$exist AND $req1->execute(array($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['pass'],
$tokken,0,0,date('Y/m/d H.i.s'),'admin'
))){
  header('Location:page_succes.php?id=succes');
    if(mail($destinateur,$objet,$message,"De la part d'Ikcard")){
      echo 'Enregistrement effectué avec succès!';
    }
 }else {
  echo "Email est deja enregistré";
  header('Location:page_succes.php?id=exists');
}

 ?>
