<?php
$nom=$_POST['nom'];$prenom=$_POST['prenom'];$adresse=$_POST['adresse'];$contact=$_POST['contact'];
$vcard['emails']=$_POST['emails'];$vcard['siteweb']=$_POST['siteweb'];
$vcard['prenom']=$prenom;
$vcard['nom']=$nom;
$vcard['adresse']=$adresse;
$vcard['mobiles']=$contact;
$uid=md5($prenom.$nom);
$date=date("Ymd");
$etat = file_put_contents("{$vcard['nom']}_{$vcard['prenom']}.vcf",
"BEGIN:VCARD
VERSION:3.0
N:{$vcard['nom']};{$vcard['prenom']}
FN:{$vcard['prenom']} {$vcard['nom']}
NICKNAME:{$vcard['nom']}
TEL;WORK;VOICE:{$vcard['mobiles']}
TEL;HOME;VOICE:{$vcard['mobiles']}
TEL;CELL;VOICE:{$vcard['mobiles']}
ADR;HOME:;{$vcard['adresse']}
EMAIL;PREF;INTERNET:{$vcard['emails']}
URL;WORK:{$vcard['siteweb']}
REV:$date
UID:$uid
END:VCARD");
echo "<h1>Vcard: {$vcard['nom']}_{$vcard['prenom']}.vcf</h1>";
print_r($vcard);
if ($etat && file_exists("{$vcard['nom']}_{$vcard['prenom']}.vcf")){
  echo "<h5><i>Etat: Vcard bien créée: <a download href=\"{$vcard['nom']}_{$vcard['prenom']}.vcf\">Visualiser</a></i></h5>";
}
else {
  echo "<h5><i>Etat: Vcard non créée!</i></h5></p>";
}
 ?>
