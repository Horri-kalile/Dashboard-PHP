<?php 

require_once('../model/Admin.class.php');

$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["img_ad"]["name"]);
$extensions = array('jpg'  , 'jpeg' , 'png');
$image_extension = strtolower(end(explode('.', $_FILES["img_ad"]["name"])));

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if ($_FILES["img_ad"]["error"] == 1) {

    $admin = new Admin('avatar.jpg',$_POST['nom_ad'], $_POST['pren_ad'],  $_POST['mail_ad'],  $_POST['mp_ad']);

    $admin->modifier();
    

  }elseif ($_FILES['img_ad']['size'] > 5000000) {

    echo "<div>la taille de l'image superieur a 5 mo</div>";

  }elseif (! in_array($image_extension, $extensions)) {
      
    echo "<div>le fichier n'est pas une image</div>";

  }else{

    move_uploaded_file($_FILES["img_ad"]["tmp_name"], $target_file) ;

    $admin = new Admin($_FILES['img_ad']['name'],$_POST['nom_ad'], $_POST['pren_ad'],  $_POST['mail_ad'],  $_POST['mp_ad'] );

    $admin->modifier();
header("location:../listeAdmin.php?resultatModif=ouiModif");
     }
}

?>
