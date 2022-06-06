<?php
	$title = 'Claybrook Sponsors';
	
	$sponsorDetails = new DatabaseFunctions('sponsors');
	$allSponsorDetails = $sponsorDetails->findAll();

	$content = loadTemp('../template/sponsor_template.php', ['allSponsorDetails'=>$allSponsorDetails]);
?>