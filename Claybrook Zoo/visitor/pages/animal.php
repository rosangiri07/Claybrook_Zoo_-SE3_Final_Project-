<?php
	$title = 'Claybrook Animals';
	
	$animalDetails = new AnimalFunctions('animals');
	

	$criteriaSearch = [];
	if (isset($_POST['search'])) {
		$animal = $animalDetails->searchAnimals($_POST['criteria'], $_POST['category']);
		$criteriaSearch['criteria'] = $_POST['criteria'];
		$criteriaSearch['category'] = $_POST['category'];

	} else {
		$animal = $animalDetails->findAllAnimals('1');
	}
	$numberOfAnimal = $animal->rowCount();

	$content = loadTemp('../template/animal_template.php', ['animal'=>$animal, 'numberOfAnimal'=>$numberOfAnimal, 'criteriaSearch'=>$criteriaSearch]);
?>