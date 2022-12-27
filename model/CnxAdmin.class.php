<?php
class CnxAdmin{
private $mail_ad;
private $mp_ad;

        
function __construct($mail_ad,$mp_ad){
$this->mail_ad = $mail_ad;
$this->mp_ad = md5($mp_ad);


}


public function verifier(){ 

    include('../includes/connect_db.php');
    $req = $bdd->query(" SELECT * FROM admin WHERE mail_ad = '$this->mail_ad' AND mp_ad = '$this->mp_ad'");
    $resultat = $req->fetch();

  if (!$resultat)
{
  header('location:../login.php?mess=error');
  
}
   else
{
       session_start();

       $_SESSION['id_ad'] = $resultat['id_ad'];
       $_SESSION['img_ad'] = $resultat['img_ad'];
       $_SESSION['nom_ad'] = $resultat['nom_ad'];
       $_SESSION['pren_ad'] = $resultat['pren_ad'];
       $_SESSION['mail_ad'] = $resultat['mail_ad'];
       $_SESSION['mp_ad'] = $resultat['mp_ad'];
       
       
	header('location:../index.php');


} 

}
}


$admin = new CnxAdmin($_POST['mail_ad'],$_POST['mp_ad']);


?>