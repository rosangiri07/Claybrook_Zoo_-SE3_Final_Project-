<?php
	$title = 'Claybrook Sponsors';
	
	$sponsorDetails = new DatabaseFunctions('sponsors');
	$singleSponsorDetail = $sponsorDetails->find('sponsorId', $_GET['s_id'])->fetch();

	$animalDetails = new DatabaseFunctions('animals');
	$allAnimalDetails = $animalDetails->find('sponsorId', $_GET['s_id']);

	$content = loadTemp('../template/sponsor_detail_template.php', ['singleSponsorDetail'=>$singleSponsorDetail, 'allAnimalDetails'=>$allAnimalDetails]);
?>