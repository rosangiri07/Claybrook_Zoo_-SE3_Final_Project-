<?php
	$title = 'Claybrook Animals';

	$isArchiveSuccessful = false;

	$animalDetails = new AnimalFunctions('animals');
	
	if (isset($_GET['d_id'])) {
		$animalDetails->archive($_GET['d_id'], '0', 'animalId');
		$isArchiveSuccessful = true;
	}

	$unarchivedAnimals = $animalDetails->findAllAnimals('1');

	$content = loadTemp('../template/animal_template.php', ['unarchivedAnimals'=>$unarchivedAnimals, 'isArchiveSuccessful'=>$isArchiveSuccessful]);
?>