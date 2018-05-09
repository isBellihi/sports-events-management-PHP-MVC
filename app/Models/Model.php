<?php
namespace Models;
use Database\DB;
class Model{
		protected $model;
		protected static $db;

		function __construct(){
			if(is_null(self::$db)){
          self::$db = DB::getInstance();
      }
			if($this->model == null){
				$parts = explode('\\',get_class($this));
          $class_name = end($parts);
          //var_dump($class_name);
				//$this->model = ucfirst(strtolower(str_replace('Model','',$class_name)));
          $this->model = ucfirst(strtolower($class_name));
				//var_dump($this->model); echo '<br>';
			}
		}
    /**
     * @return mixed
     * return tous les lignes de la table dans la base de donnees
     */
		public static function all(){
        $parts = explode('\\',get_called_class());
        $class_name = end($parts);
        $req = self::$db->prepare('select * from '. $class_name . 's');
        //$req->execute();
        //$req->setFetchMode(\PDO::FETCH_CLASS,$class_name);
        $res = $req->fetchAll(\PDO::FETCH_CLASS,get_called_class());
        //var_dump($res);
        return $res;
		    //return $this->db->query('select * from ' . $this->model . 's');
    }

    /**
     * @param $id identifiant de la ligne qui nous voulons chercheer dans la base de donnees
     * @return la ligne de id = $id dans la base de donnees
     */
    public static  function find($id){
        $parts = explode('\\',get_called_class());
        $class_name = end($parts);
        $req = self::$db->prepare('SELECT * FROM '. $class_name . 's WHERE id = ' . $id);
        //$req->execute();
        $req->setFetchMode(\PDO::FETCH_OBJ);
        return $req->fetch(\PDO::FETCH_OBJ);
        //return $req->fetchAll(\PDO::FETCH_CLASS,$class_name);
		    //return $this->db->query('select * from ' . $this->model . 's where id = ' . $id);
    }
}

