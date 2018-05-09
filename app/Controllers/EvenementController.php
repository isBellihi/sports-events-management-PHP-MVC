<?php
/**
 * Created by PhpStorm.
 * User: Win5
 * Date: 03/05/2018
 * Time: 21:50
 */

namespace App\Controllers;


use Models\Evenement;

class EvenementController extends Controller
{
    public function index(){
        $evens = (\App::getInstance()->getTable('Evenement'))::all();
        $this->view('evenements.index', compact('evens'));
       /* foreach ($evens as $even) {
            echo "$even->description.<br>";
        }*/

    }


    public function store(){
        $even = new Evenement();
        //var_dump($req);
        $even->titre = $_POST['titre'];
        $even->frais = $_POST['frais'];
        $even->slogon = $_POST['slogn']; $even->nbrEquipes = $_POST['nbrEquipes'];
        $even->details = $_POST['details']; $even->dateDebut = $_POST['dateDebut'];
        $even->dateFin = $_POST['dateFin'];
        $even->regles = $_POST['regles']; $even->limiteDate = $_POST['limiteDate'];
        $even->lieu = $_POST['lieu']; $even->type = $_POST['type'];
        $even->phase1 = $_POST['phase1'];
        $even->save();
        $_SESSION['success'] = 'Félicitation votre competition a été valider';
        $this->view('evenements.show',compact('even'));
    }

    public function show($id){
        $even = Evenement::find($id);
        if(isset($even)) return $this->view('evenements.show',compact('even'));
        return $this->view('errors.404');
    }
}