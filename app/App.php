<?php
/**
 * Created by PhpStorm.
 * User: Win5
 * Date: 02/05/2018
 * Time: 03:42
 */

class App
{
  public $titile = "App PFA";
  private $db_instance;
  private static $_instance;

  public static function getInstance(){
      if(is_null(self::$_instance)){
          self::$_instance = new App();
      }
      return self::$_instance;
  }

  public static function load(){
      session_start();
      require_once ROOT . '\PFA\vendor\autoload.php';
      //App\Autoloader::register();
  }

  public function getTable($name){
      $class_name = 'Models\\'.ucfirst($name);
      return new $class_name();
  }

  private function getDb(){
      $config = \App\Config::getInstance();
      if(is_null($this->db_instance)){
          $this->db_instance =  new \Database\DB($config->get('db_name'),$config->get('db_user'),$config->get('db_pass'),$config->get('db_host'));
      }
      return $this->db_instance;
  }
}