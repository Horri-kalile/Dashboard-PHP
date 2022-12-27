<?php
class Client{
private $image_client;
private $nom_client;
private $pren_client;
private $tlf_client;
private $email_client;
private $mp_client;



function __construct($image_client,$nom_client,$pren_client,$tlf_client,$email_client,$mp_client){
$this->image_client = addslashes($image_client);
$this->nom_client = addslashes($nom_client);
$this->pren_client = addslashes($pren_client);
$this->tlf_client = addslashes($tlf_client);
$this->email_client = addslashes($email_client);
$this->mp_client = md5($mp_client);


}

public function ajouter(){ 

include('../includes/connect_db.php');

		
		$req = $bdd->exec("INSERT INTO `client`(`image_client`, `nom_client`, `pren_client`, `tlf_client`, `email_client`, `mp_client`)	
    VALUES ('$this->image_client','$this->nom_client','$this->pren_client','$this->tlf_client','$this->email_client','$this->mp_client')");
		
		echo'<span class="message_envoyer">Message envoyer avec succes</span>';
                //return TRUE;
			
}



public function modifier(){ 

    include('../includes/connect_db.php');

    $id=$_GET['id'];
        
        $r=$bdd->exec(" UPDATE `client` SET `image_client`='$this->image_client',`nom_client`='$this->nom_client',`pren_client`='$this->pren_client',`tlf_client`='$this->tlf_client',`mp_client`='$this->mp_client' WHERE 	id_client = $id ");
				
        
        echo'oui';
        
}	






public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM client WHERE id_client =\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}








}


//$instance = new User($_POST['nom'],$_POST['nom_client'],$_POST['mp_client'],$_POST['datedenaissance'],$_POST['adr'],$_POST['numtel'],$_POST['mp'],$_POST['e_mail'],$_POST['paiement'],$_POST['typeoffre'],$_POST['reussite']);


?>