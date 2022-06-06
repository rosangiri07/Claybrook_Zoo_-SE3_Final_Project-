<div class="container">
	    <h1 class="head-title">Sponsors</h1>

  		<?php foreach ($allSponsorDetails as $sponsor) { ?>

		<div class="link">

		    <a href="index.php?page=sponsor_detail.php&s_id=<?php echo $sponsor['sponsorId']; ?>">

					<img src="<?php echo $sponsor['signageImage']; ?>">
				<div class="animalshortdetail">
					
					<h2><?php echo $sponsor['name']; ?></h2>
				
					<p><?php echo $sponsor['primaryNumber'] . ', ' . $sponsor['secondaryNumber']; ?></p>
				
					<p><?php echo $sponsor['street'].', '. $sponsor['city']. ', '. $sponsor['country']; ?></p>
				
					<p>ID : <?php echo $sponsor['companyID']; ?></p>
				</div>
		    </a>
		  </div>


		<?php } ?>


</div>