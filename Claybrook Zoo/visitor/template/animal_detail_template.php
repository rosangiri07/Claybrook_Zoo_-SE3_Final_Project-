<div class="container">
<div class="animal-info">
	
		<div class="align-info">
			<img class="ai-img" src="<?php echo $singleAnimalDetail['image']; ?>">
			
			<div class="anml-title"><strong><?php echo $singleAnimalDetail['speciesName']; ?></strong></div>
			<div><span>Name</span> : <span><?php echo $singleAnimalDetail['name']; ?></span></div>
			<div><span>Given Name</span> : <span><?php echo $singleAnimalDetail['animalName']; ?></span></div>
			<div><span>Animal Code</span> : <span><?php echo $singleAnimalDetail['animalId']; ?></span></div>
			<div><span>Natural Habitat</span> : <span><?php echo $singleAnimalDetail['habitat']; ?></span></div>
			<div class="diet-con"><span>Dietary Requirement</span> : <span class="an-iet"><?php echo $singleAnimalDetail['diet']; ?></span></div>
			<div><span>Date of Birth</span> : <span><?php echo $singleAnimalDetail['dob']; ?></span></div>
			<div><span>Date animal Joined zoo</span> : <span><?php echo $singleAnimalDetail['doj']; ?></span></div>
			<div><span>Gender</span> : <span><?php echo $singleAnimalDetail['gender']; ?></span></div>
			<div><span>Average Life span</span> : <span><?php echo $singleAnimalDetail['als']; ?> yrs</span></div>
			<div><span>Height</span> : <span><?php echo $singleAnimalDetail['height']; ?> cm</span></div>
			<div><span>Weight</span> : <span><?php echo $singleAnimalDetail['weight']; ?> kg</span></div>

			<?php if ($singleAnimalDetail['categoryId'] == '1') { ?>
				<div><span>Gestation Period</span> : <span><?php echo $singleAnimalDetail['gestationTime']; ?> months</span></div>
				<div><span>Mammal Category</span> : <span><?php echo $singleAnimalDetail['category']; ?></span></div>
				<div><span>Average Body Temperature</span> : <span><?php echo $singleAnimalDetail['bodyTemperature']; ?> degree celsius</span></div>		
			<?php } ?>

			<?php if ($singleAnimalDetail['categoryId'] == '2') { ?>
				<div><span>Nest Construction Method</span> : <span><?php echo $singleAnimalDetail['nest']; ?></span></div>
				<div><span>Clutch Size</span> : <span><?php echo $singleAnimalDetail['clutch']; ?> cm</span></div>
				<div><span>wingspan</span> : <span><?php echo $singleAnimalDetail['wingspan']; ?> cm</span></div>		
				<div><span>Can Fly?</span> : <span><?php echo $singleAnimalDetail['fly']; ?></span></div>		
				<div><span>Plugame Color</span> : <span><?php echo $singleAnimalDetail['plumage']; ?></span></div>		
			<?php } ?>

			<?php if ($singleAnimalDetail['categoryId'] == '3') { ?>
				<div><span>Average Body Temperature</span> : <span><?php echo $singleAnimalDetail['bodyTemperature']; ?> degree celsius</span></div>
				<div><span>Water Type</span> : <span><?php echo $singleAnimalDetail['waterType']; ?></span></div>
				<div><span>Color Variant</span> : <span><?php echo $singleAnimalDetail['color']; ?> degree celsius</span></div>		
			<?php } ?>

			<?php if ($singleAnimalDetail['categoryId'] == '4') { ?>
				<div><span>Reproduction Type</span> : <span><?php echo $singleAnimalDetail['reproduction']; ?></span></div>
				<div><span>Avereage Clutch Size</span> : <span><?php echo $singleAnimalDetail['clutch']; ?></span></div>
				<div><span>No. of offspring</span> : <span><?php echo $singleAnimalDetail['offspring']; ?></span></div>		
			<?php } ?>
		</div>

		<?php if ($isSponsorAssigned) { ?>
			<div class="align-info">
				<img class="si-img" src="<?php echo $isSponsorAssigned['signageImage']; ?>">
				<div class="anml-title"><strong><?php echo $isSponsorAssigned['name']; ?></strong></div>
				<div><span>Company ID</span> : <span><?php echo $isSponsorAssigned['companyID']; ?></span></div>
				<div><span>Sponsor Band</span> : <span><?php echo $singleAnimalDetail['band']; ?></span></div>
				<div><span>Agreement Date</span> : <span><?php echo $singleAnimalDetail['agreementFrom'] . ' to ' . $singleAnimalDetail['agreementTo']; ?></span></div>
				<div><span>Phone number</span> : <span><?php echo $isSponsorAssigned['primaryNumber'] . ', ' . $isSponsorAssigned['secondaryNumber']; ?></span></div>
				<div><span>Address</span> : <span><?php echo $isSponsorAssigned['street'].', '. $isSponsorAssigned['city']. ', '. $isSponsorAssigned['country']; ?></span></div>
				<div><span>Special Note</span> : <span><?php echo $isSponsorAssigned['note']; ?></span></div>
				<br>
				<a class="visit-btn" href="index.php?page=sponsor_detail.php&s_id=<?php echo $isSponsorAssigned['sponsorId']; ?>">Visit <?php echo $isSponsorAssigned['name']; ?></a>
			</div>		
		<?php } ?>
</div>
