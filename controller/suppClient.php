<?php 

require_once('../Model/Client.class.php');

$client = new Client($_POST['image_client'],$_POST['nom_client'], $_POST['pren_client'], $_POST['tlf_client'], $_POST['email_client'],$_POST['mp_ad']);

$client->supprimer();
header("Location:../listeclient.php?resultat=oui");
//echo "oui";
//exit();
?>
