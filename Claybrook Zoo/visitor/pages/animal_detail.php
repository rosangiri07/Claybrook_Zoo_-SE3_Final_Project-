<?php
	
	$animalDetails = new AnimalFunctions('animals');
	$singleAnimalDetail = $animalDetails->findAnimal($_GET['a_id'], $_GET['c_id'])->fetch();

	$title = 'Claybrook Animal Detials';

	$sponsorDetails = new DatabaseFunctions('sponsors');
	$isSponsorAssigned = false;

	if ($singleAnimalDetail['sponsorId'] != 'none') {
		$isSponsorAssigned = $sponsorDetails->find('sponsorId', $singleAnimalDetail['sponsorId'])->fetch();
		// $isSponsorAssigned = true;
	}

	$content = loadTemp('../template/animal_detail_template.php', ['singleAnimalDetail'=>$singleAnimalDetail, 'isSponsorAssigned'=>$isSponsorAssigned]);
?>