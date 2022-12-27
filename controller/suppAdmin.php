<?php 

require_once('../Model/Admin.class.php');

$admin = new Admin($_POST['img_ad'],$_POST['nom_ad'], $_POST['pren_ad'], $_POST['mail_ad'],$_POST['mp_ad']);

$admin->supprimer();
header("Location:../listeAdmin.php?resultat1=ouiSupp");
//echo "oui";
//exit();
?>
