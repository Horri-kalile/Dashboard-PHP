<?php 

require_once('../model/Client.class.php');

$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["image_client"]["name"]);
$extensions = array('jpg'  , 'jpeg' , 'png');
$image_extension = strtolower(end(explode('.', $_FILES["image_client"]["name"])));

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if ($_FILES["image_client"]["error"] == 1) {

    $client = new Client('avatar.jpg',$_POST['nom_client'],$_POST['pren_client'],  $_POST['tlf_client'],  $_POST['email_client'],  $_POST['mp_client']);

    $client->modifier();


  }elseif ($_FILES['image_client']['size'] > 5000000) {

    echo "<div>la taille de l'image superieur a 5 mo</div>";

  }elseif (! in_array($image_extension, $extensions)) {
      
    echo "<div>le fichier n'est pas une image</div>";

  }else{

    move_uploaded_file($_FILES["image_client"]["tmp_name"], $target_file) ;

    $client = new Client($_FILES['image_client']['name'],$_POST['nom_client'], $_POST['pren_client'],  $_POST['tlf_client'],  $_POST['email_client'] ,  $_POST['mp_client']);

    $client->modifier();
header("location:../listeclient.php?resultat=oui");
     }
}

?>
