<?php 
namespace Models;

/**
* 
*/
class Evenement extends Model{

    function __construct()
	{
	    parent::__construct();
	}

    /**
     *$even->titre = $req->titre;$even->frais = $req->frais;
    $even->slogon = $req->slogon; $even->nbrEquipes = $req->nbrEquipes;
    $even->details = $req->details; $even->dateFin = $req->dateDebut;
    $even->regles = $req->regles; $even->limiteDate = $req->limiteDate;
    $even->lieu = $req->lieu; $even->type = $req->type;
    $even->phase1 = $req->phase1;
     */
    public function save(){
        $sql = 'INSERT INTO EVENEMENTS(titre,slogon,details,regles,lieu,phase1';
        $sql .= ',type,nbrEquipes,dateDebut,dateFin,limiteDate) VALUES(\'';
        $sql .= $this->titre . '\',\'' . $this->slogon . '\',\'' .  $this->details . '\',\'' .  $this->regles . '\',\'' ;
        $sql .=  $this->lieu . '\',\'' .  $this->phase1 . '\',\'' .  $this->type . '\',\'' .  $this->nbrEquipes . '\',\'';
        $sql .=  $this->dateDebut . '\',\'' . $this->dateFin . '\',\'' . $this->limiteDate . '\');' ;
        parent::$db->getPDO()->exec($sql);
    }



}
