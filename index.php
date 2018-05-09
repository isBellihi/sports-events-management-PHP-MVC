<?php
define('ROOT',dirname(__DIR__));
require ROOT . '\PFA\app\App.php';
App::load();

$page;
if(isset($_GET['p'])){
    $page = $_GET['p'];
}else{
    echo "error";
}
use App\Controllers\EvenementController;
if($page == ""){
    $even = new EvenementController();
    $even->index();
}elseif ($page=='new'){
    $even = new EvenementController();
    $even->store();
}


exit();
$app = App::getInstance();
$even = $app->getTable('Evenement');
//var_dump($even->find(2)->description);
$data = $even::all();
foreach($data as $ev){
    echo $ev->name . '<br>';
}
echo '<br>';
$user = $app->getTable('User');
$users = $user::find(2);
    echo $users->username . '<br>';
exit();
?>
