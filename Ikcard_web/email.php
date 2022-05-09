<?php if(mail("abdoutra9124@gmail.com","Salut","Test","from to")){
  echo "Yes";
}else{
  echo "no";
} ?>
<?php if(mail("abdoutra9124@gmai.com", "Sujet", "Le message\nligne2")){
  echo "Yes";
}else{
  echo "no";
} ?>
<?php
$destinataires = "abdoutra9124@gmai.com, dupond@tutovisuel.com";
$sujet = "Bienvenue sur Tutovisuel";

// en-têtes expéditeur
$entetes = "From : abdoutra9124@gmai.com\n";

mail($destinataires, $sujet, "Le message\nligne2", $entetes);
?>
