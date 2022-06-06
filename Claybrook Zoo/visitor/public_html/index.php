<?php 
	include '../../connect/connect.php';
	include '../../functions/loadTemp.php';
	require '../../admin/classes/animalFunctions.php';
	require '../../admin/classes/databaseFunctions.php';

		if (isset($_GET['page'])) {
			require '../pages/'.$_GET['page'];
		}
		else{
			require '../pages/home.php';
		}
		$data = loadTemp('../template/layout.php',['title'=> $title,'content'=> $content]);
		echo $data;
?>