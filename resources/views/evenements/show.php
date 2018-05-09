<?php require_once '../../../vendor/autoload.php';
        use Database\DB;
        use Models\Evenement;
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Evenement xxxx</title>
</head>
<body>
	<div>
		      <lu>
      <?php 
         $datas = DB::all('Evenement');
         foreach ($datas as $data): ?>
         <h2><?= $data->name;?></h2>
        <li><?= $data->titre;?></li>
        <li><?= $data->description;?></li>
      <?php endforeach;?>
    </lu>
		<h1>ca c'est un evenements</h1>
		<pre>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</pre>	
	</div>
</body>
</html>