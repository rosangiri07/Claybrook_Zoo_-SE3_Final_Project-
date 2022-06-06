<?php
	$title = 'Claybrook Archives';

	$isunArchiveSuccessful = false;

	$animalDetails = new AnimalFunctions('animals');
	
	if (isset($_GET['archiveId'])) {
		$animalDetails->archive($_GET['archiveId'], '1', 'animalId');
		$isunArchiveSuccessful = true;
	}
	
	$archivedAnimalDetails = $animalDetails->findAllAnimals('0');

	$content = loadTemp('../template/animal_archive_template.php',['archivedAnimalDetails'=>$archivedAnimalDetails, 'isunArchiveSuccessful'=>$isunArchiveSuccessful]);
?>