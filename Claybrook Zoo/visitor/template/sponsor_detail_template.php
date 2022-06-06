<div class="container">
<div class="animal-info">
	

		<?php if ($singleSponsorDetail) { ?>
			<div class="align-info">	
				<img src="<?php echo $singleSponsorDetail['signageImage']; ?>">
				<div class="anml-title"><strong><?php echo $singleSponsorDetail['name']; ?></strong></div>
				<div><span>Company ID</span> : <span><?php echo $singleSponsorDetail['companyID']; ?></span></div>
				<div><span>Primary number</span> : <span><?php echo $singleSponsorDetail['primaryNumber']; ?></span></div>
				<div><span>Secondary number</span> : <span><?php echo $singleSponsorDetail['secondaryNumber']; ?></span></div>
				<div><span>Street</span> : <span><?php echo $singleSponsorDetail['street']; ?></span></div>
				<div><span>City</span> : <span><?php echo $singleSponsorDetail['city']; ?></span></div>
				<div><span>Country</span> : <span><?php echo $singleSponsorDetail['country']; ?></span></div>
				<div><span>Special Note</span> : <span><?php echo $singleSponsorDetail['note']; ?></span></div>
			</div>		
		<?php } ?>
	</div>


</div>