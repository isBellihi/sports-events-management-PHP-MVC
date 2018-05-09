<?php
/**
 * Created by PhpStorm.
 * User: Win5
 * Date: 03/05/2018
 * Time: 21:49
 */

namespace App\Controllers;

class Controller
{
    protected $viewPath;
    protected $layout;

    public function __construct(){
        $this->viewPath = ROOT . '/PFA/resources/';
        $this->layout = ROOT . '/PFA/resources/';
    }

    public function view($view, $vars= []){
        ob_start();
        extract($vars);
        require($this->viewPath . 'views/' . str_replace('.','/',$view). '.php');
        $content = ob_get_clean();
        require($this->viewPath . 'layouts/navbar.php');
    }
}