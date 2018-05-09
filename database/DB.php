<?php
namespace Database;
//require_once 'vendor/autoload.php';

class DB{


    private $pdo;
    private static $_instance;

    public static function getInstance(){
        if(is_null(self::$_instance)){
            self::$_instance = new DB();
        }
        return self::$_instance;
    }

    public function __construct(){
        //his->id = uniqid();
    }


    /**
     * description : getPDO permer de se connecter a la base de donnees
     */

    public function getPDO(){
        if(self::getInstance()->pdo === null){
            try {
                $pdo = new \PDO('mysql:dbname=pfa;host=localhost','root' , '');
                $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                self::getInstance()->pdo = $pdo;
            } catch (PDOException $e) {
                echo 'Connexion échouée : ' . $e->getMessage();
            }
        }
        return $this->pdo;
    }

    /**
     * Permer d'executer une requet SQL
     */

    public static function all($model){
        $req = self::getInstance()->getPDO()->query('SELECT * FROM '.$model.'s');
        $datas = $req->fetchAll(\PDO::FETCH_CLASS,'Models\\'.ucfirst(strtolower($model)));
        return $datas;
    }

    public function prepare($statement,$atributs=null){
        $req = $this->getPDO()->prepare($statement);
        $req->execute($atributs);
        return $req;
        //$req->setFetchMode(\PDO::FETCH_CLASS,$class_name);
        //return $req->fetchAll(\PDO::FETCH_CLASS,$class_name);
        // return $req->fetch(\PDO::FETCH_CLASS,$class_name);return un seul resultat
    }
    /**
     * 	public function query($statement){
    $req = $this->getPDO()->prepare($statement);
    $req->execute();
    return $req->fetchAll();
    }
     */

}