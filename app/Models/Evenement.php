<?php 
namespace Models;
use Users;

/**
* 
*/
class Evenement
{

	function __construct($id=null,Users $user=null,$name=null,$titre=null,$slogon=null,$categorie=null,$nbrEquipes=null,$dateDebut=null,$dateFin=null)
	{
		$this->$id=$id;
		$this->$user=$user;
		$this->$name=$name;
	    $this->$titre=$titre;
	    $this->$slogon=$slogon;
	    $this->$categorie=$categorie;
	    $this->$nbrEquipes=$nbrEquipes;
	    $this->$dateDebut=$dateDebut;
	    $this->$dateFin=$dateFin;
	}
}


 ?>