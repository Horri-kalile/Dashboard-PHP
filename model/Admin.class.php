<?php
class Admin{
private $img_ad;
private $nom_ad;
private $pren_ad;
private $mail_ad;
private $mp_ad;



function __construct($img_ad,$nom_ad,$pren_ad,$mail_ad,$mp_ad){
$this->img_ad = addslashes($img_ad);
$this->nom_ad = addslashes($nom_ad);
$this->pren_ad = addslashes($pren_ad);
$this->mail_ad = addslashes($mail_ad);
$this->mp_ad = md5($mp_ad);


}

public function ajouter(){ 

include('../includes/connect_db.php');
		
		$req = $bdd->exec("INSERT INTO `admin`(`img_ad`, `nom_ad`, `pren_ad`, `mail_ad`, `mp_ad`)	VALUES ('$this->img_ad','$this->nom_ad','$this->pren_ad','$this->mail_ad','$this->mp_ad')");
		
		echo'<span class="message_envoyer">Message envoyer avec succes</span>';
                //return TRUE;
			
}



public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $r=$bdd->exec(" UPDATE `admin` SET `img_ad`='$this->img_ad',`nom_ad`='$this->nom_ad',`pren_ad`='$this->pren_ad',`mail_ad`='$this->mail_ad',`mp_ad`='$this->mp_ad' WHERE id_ad = $id ");
				
        
        echo'oui';
        
}	






public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM admin WHERE id_ad =\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}








}


//$instance = new User($_POST['nom'],$_POST['nom_ad'],$_POST['mp_ad'],$_POST['datedenaissance'],$_POST['adr'],$_POST['numtel'],$_POST['mp'],$_POST['e_mail'],$_POST['paiement'],$_POST['typeoffre'],$_POST['reussite']);


?>