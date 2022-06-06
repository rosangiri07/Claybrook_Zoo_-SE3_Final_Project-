<?php
	$title = 'Claybrook Sponsors';

	$isArchivingSuccessful = false;

	$sponsorDetails = new DatabaseFunctions('sponsors');
	
	if (isset($_GET['d_id'])) {
		$sponsorDetails->archive($_GET['d_id'], '0', 'adnimalId');
		$isArchivingSuccessful = true;
	}

	$allSponsorsDetails = $sponsorDetails->findAll();

	$content = loadTemp('../template/sponsor_template.php', ['allSponsorsDetails'=>$allSponsorsDetails, 'isArchivingSuccessful'=>$isArchivingSuccessful]);
?>