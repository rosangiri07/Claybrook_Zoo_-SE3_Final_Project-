<div class="container">
	  
	<div class="head-msg">
	    <h1 class="head-title">Animals</h1>

	<div class="head-search">
			<form action="index.php?page=animal.php" method="POST" class="form-search">
				<select name="category">
					<option value="all" <?php if (isset($criteriaSearch['category'])) if ($criteriaSearch['category'] == 'all') echo 'selected'; ?>>All</option>
					<option value="1" <?php if (isset($criteriaSearch['category'])) if ($criteriaSearch['category'] == '1') echo 'selected'; ?>>Mammal</option>
					<option value="2" <?php if (isset($criteriaSearch['category'])) if ($criteriaSearch['category'] == '2') echo 'selected'; ?>>Bird</option>
					<option value="3" <?php if (isset($criteriaSearch['category'])) if ($criteriaSearch['category'] == '3') echo 'selected'; ?>>Fish</option>
					<option value="4" <?php if (isset($criteriaSearch['category'])) if ($criteriaSearch['category'] == '4') echo 'selected'; ?>>Reptile / Amphibian</option>
				</select>
				<input type="text" name="criteria" placeholder="Enter animal name" value="<?php if (isset($criteriaSearch['criteria'])) echo $criteriaSearch['criteria']; ?>">
				<button name="search"><i class="fa fa-search" aria-hidden="true"></i> Search</button>
			</form>
	</div>
	
	</div>

  		<?php foreach ($animal as $value) { ?>

		<div class="link">
		    <a href="index.php?page=animal_detail.php&a_id=<?php echo $value['animalId']; ?>&c_id=<?php echo $value['categoryId']; ?>">
				<img src="<?php echo $value['image']; ?>">
				<div class="animalshortdetail">
					<h2><?php echo $value['speciesName']; ?></h2>
					<p>Animal Name: <?php echo $value['animalName']; ?></p>
					<p>Habitat: <?php echo $value['habitat']; ?></p>
					<p>Deitary Requirement:<?php echo $value['diet']; ?></p>
					<p>Date of Birth: <?php echo $value['dob']; ?></p>
				</div>
		    </a>
		  </div>

		<?php } ?>
