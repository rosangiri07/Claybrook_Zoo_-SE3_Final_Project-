<?php 
	include '../../connect/connect.php';
	include '../../functions/loadTemp.php';
	require '../classes/animalFunctions.php';
	require '../classes/databaseFunctions.php';

	if (isset($_SESSION['adminId'])) {
		if (isset($_GET['page'])) {
			require '../pages/'.$_GET['page'];
		}
		else{
			require '../pages/dashboard.php';		
		}
		$data = loadTemp('../template/layout.php',['title'=> $title,'content'=> $content]);
		echo $data;
	}else{
		header('Location:http://localhost:8080/cbz00/admin/login/login.php');
	}

?>