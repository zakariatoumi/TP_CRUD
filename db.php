<?php 

$dns='mysql:host=localhost;dbname=nouveau_bd_crud';
$username='root';
$pwd='';
$option=[];




try {

	$connection = new PDO($dns,$username,$pwd,$option);
	
	
} catch (PDOException $e) {
	
}

 ?>