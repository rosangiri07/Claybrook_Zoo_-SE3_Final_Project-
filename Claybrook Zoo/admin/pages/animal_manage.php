<?php
	$title = 'Claybrook Manage';
	$isAnimalAddingSuccessful = false;
	$updatingAnimalDetails = null;
	$catDetails = new DatabaseFunctions('categories');
	$allCatDetails = $catDetails->findAll();
	$sponDetails = new DatabaseFunctions('sponsors');
	$allSponsDetails = $sponDetails->findAll();

	if (isset($_POST['add'])) {

		$animalDetails = new DatabaseFunctions('animals');
		$imgName = $_FILES['image']['name'];
		$tempPath = $_FILES['image']['tmp_name'];
		$finalPath = '../../assets/images/animals/' . $imgName;
		move_uploaded_file($tempPath, $finalPath);
		$_POST['image'] = $finalPath;

		$criteria = [
			'animalId'=>$_POST['animalId'],
			'speciesName'=>$_POST['speciesName'],
			'animalName'=>$_POST['animalName'],
			'habitat'=>$_POST['habitat'],
			'diet'=>$_POST['diet'],
			'dob'=>$_POST['dob'],
			'doj'=>$_POST['doj'],
			'gender'=>$_POST['gender'],
			'als'=>$_POST['als'],
			'height'=>$_POST['height'],
			'weight'=>$_POST['weight'],
			'image'=>$_POST['image'],
			'categoryId'=>$_POST['categoryId'],
			'sponsorId'=>$_POST['sponsorId'],
			'band'=>$_POST['band'],
			'signage'=>$_POST['signage'],
			'price'=>$_POST['price'],
			'agreementFrom'=>$_POST['agreementFrom'],
			'agreementTo'=>$_POST['agreementTo']
		];
		$animalDetails->save($criteria,'animalId');

		if (!empty($_POST['animalId'])) {
			$currentInsertedId['animalId'] = $_POST['animalId'];
		} else {
			$currentInsertedId  = ($animalDetails->findLast('animalId'))->fetch();
		}

		if ($_POST['categoryId'] == '1') {
			$animalDetails = new DatabaseFunctions('mammals');
			$criteria = [
				'mammalId'=>$_POST['mammalId'],
				'gestationTime'=>$_POST['gestationTime'],
				'category'=>$_POST['category'],
				'bodyTemperature'=>$_POST['bodyTemperature'],
				'animalId'=>$currentInsertedId['animalId']
			];
			$animalDetails->save($criteria,'mammalId');
		} else if ($_POST['categoryId'] == '2') {
			$animalDetails = new DatabaseFunctions('birds');
			$criteria = [
				'birdId'=>$_POST['birdId'],
				'nest'=>$_POST['nest'],
				'clutch'=>$_POST['clutch'],
				'wingspan'=>$_POST['wingspan'],
				'fly'=>$_POST['fly'],
				'plumage'=>$_POST['plumage'],
				'animalId'=>$currentInsertedId['animalId']
			];
			$animalDetails->save($criteria,'birdId');
		} else if ($_POST['categoryId'] == '3') {
			$animalDetails = new DatabaseFunctions('fishes');
			$criteria = [
				'fishId'=>$_POST['fishId'],
				'bodyTemperature'=>$_POST['bodyTemperature'],
				'waterType'=>$_POST['waterType'],
				'color'=>$_POST['color'],
				'animalId'=>$currentInsertedId['animalId']
			];
			$animalDetails->save($criteria,'fishId');
		} else if ($_POST['categoryId'] == '4') {
			$animalDetails = new DatabaseFunctions('repamp');
			$criteria = [
				'repampID'=>$_POST['repampID'],
				'reproduction'=>$_POST['reproduction'],
				'clutch'=>$_POST['clutch'],
				'offspring'=>$_POST['offspring'],
				'animalId'=>$currentInsertedId['animalId']
			];
			$animalDetails->save($criteria,'repampID');
		}
		$isAnimalAddingSuccessful = true;
	}

	if (isset($_GET['a_id'])) {
		$animalDetails1 = new AnimalFunctions('animals');
	
		$updatingAnimalDetails = $animalDetails1->findAnimal($_GET['a_id'], $_GET['c_id'])->fetch();
	}
	$content = loadTemp('../template/animal_manage_template.php',['category'=>$allCatDetails, 'sponsors'=>$allSponsDetails, 'isAnimalAddingSuccessful'=>$isAnimalAddingSuccessful, 'updatingAnimalDetails'=>$updatingAnimalDetails]);
?>
