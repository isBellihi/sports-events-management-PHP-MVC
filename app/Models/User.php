<?php 
namespace Models;

 class User{


 	function __construct($id=0,$nom=0,$prenom=0,$etablissement=0,$adresse=0,$dateNaissonce=0){
 		$this->id=$id;$this->nom=$nom;$this->prenom=$prenom;
 		$this->etablissement=$etablissement;$this->adresse=$adresse;
 		$this->dateNaissonce=$dateNaissonce;
 	}


 	public function __get($key){
 		$this->$key=$key;
 		var_dump($key);
 	}




}