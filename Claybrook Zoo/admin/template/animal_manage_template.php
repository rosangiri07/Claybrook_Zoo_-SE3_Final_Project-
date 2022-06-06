<div>
	<div  class="head-msg">
		<h1 class="head-title">Manage Animal</h1>
		<?php
			if ($isAnimalAddingSuccessful) {
				echo "<p class=\"valid\">Animal saved successfully!</P>";
			} 
		?>
	</div>

	<div class="form-box">
		<div class="zoo-form">
		<form action="index.php?page=animal_manage.php" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="animalId" required value="<?php echo isset($updatingAnimalDetails["animalId"]) ? $updatingAnimalDetails["animalId"] : ''; ?>">
			<input type="hidden" name="mammalId" required value="<?php echo isset($updatingAnimalDetails["mammalId"]) ? $updatingAnimalDetails["mammalId"] : ''; ?>">
			<input type="hidden" name="birdId" required value="<?php echo isset($updatingAnimalDetails["birdId"]) ? $updatingAnimalDetails["birdId"] : ''; ?>">
			<input type="hidden" name="fishId" required value="<?php echo isset($updatingAnimalDetails["fishId"]) ? $updatingAnimalDetails["fishId"] : ''; ?>">
			<input type="hidden" name="repampID" required value="<?php echo isset($updatingAnimalDetails["repampID"]) ? $updatingAnimalDetails["repampID"] : ''; ?>">
			
			<label>Species Name</label>
			<input type="text" name="speciesName" value="<?php echo isset($updatingAnimalDetails["speciesName"]) ? $updatingAnimalDetails["speciesName"] : ''; ?>" required>
			<label>Animal Name</label>
			<input type="text" name="animalName"  value="<?php echo isset($updatingAnimalDetails["animalName"]) ? $updatingAnimalDetails["animalName"] : ''; ?>"  required>
	
			<label>Habitat</label>
			<input type="text" name="habitat" value="<?php echo isset($updatingAnimalDetails["habitat"]) ? $updatingAnimalDetails["habitat"] : ''; ?>">
			<label>Dietary Requirements</label>
			<textarea name="diet" id="desc"><?php echo isset($updatingAnimalDetails["diet"]) ? $updatingAnimalDetails["diet"] : ''; ?></textarea>

			<div>
				<div>
					<label>Date of Birth</label>
					<input type="date" name="dob" max="<?php echo date('Y-m-d'); ?>" value="<?php echo isset($updatingAnimalDetails["dob"]) ? $updatingAnimalDetails["dob"] : date('Y-m-d');; ?>">
				</div>
				<div>
					<label>Date of Join</label>
					<input type="date" name="doj"  min="<?php echo date('Y-m-d'); ?>" value="<?php echo isset($updatingAnimalDetails["doj"]) ? $updatingAnimalDetails["doj"] : date('Y-m-d');; ?>">
				</div>
			</div>
			
			<div>
				<div>
					<label>Gender</label>
					<select name="gender">
						<option value="M" <?php if (isset($updatingAnimalDetails["gender"])) { if ($updatingAnimalDetails["gender"] == 'M') echo 'selected'; } else { } ?>>Male</option>
						<option value="F" <?php if (isset($updatingAnimalDetails["gender"])) { if ($updatingAnimalDetails["gender"] == 'F') echo 'selected'; } else { }  ?>>Female</option>
					</select>
				</div>
				<div>
					<label>Average Life Span</label>
					<input type="number" name="als" value="<?php echo isset($updatingAnimalDetails["als"]) ? $updatingAnimalDetails["als"] : ''; ?>">
				</div>
				<div>
					<label>Height (cm)</label>
					<input type="number" name="height" value="<?php echo isset($updatingAnimalDetails["height"]) ? $updatingAnimalDetails["height"] : ''; ?>">
				</div>
				<div>
					<label>Weight (kg)</label>
					<input type="number" name="weight" value="<?php echo isset($updatingAnimalDetails["weight"]) ? $updatingAnimalDetails["weight"] : ''; ?>">
				</div>
			</div>		
			
			
			<label>Choose Image</label>
			<input type="file" name="image">

			<label>Category</label>
			<select name="categoryId" onchange="showAnimalCategory(this)">
			<?php 
				foreach($category as $row) {
					if (isset($updatingAnimalDetails["categoryId"])) {
					 	if ($updatingAnimalDetails["categoryId"] == $row['categoryId']) 
							echo '<option value="' . $row['categoryId'] . '" selected>' . $row['name'] . '</option>';
					} else { 
						echo '<option value="' . $row['categoryId'] . '">' . $row['name'] . '</option>';
					}

				}				
			?>
			</select> 

			<div class="cat-back" id="animal-mammal" style="display: <?php if (isset($_GET['c_id'])) { if ($_GET['c_id'] == '1') echo 'block'; else echo 'none'; } else { echo 'block'; } ?>;">
				<div>
					<div>
						<label>Gestation Period</label>
						<input type="number" name="gestationTime" value="<?php echo isset($updatingAnimalDetails["gestationTime"]) ? $updatingAnimalDetails["gestationTime"] : ''; ?>">
					</div>
					<div>
						<label>Mammal Category</label>
						<input type="text" name="category" value="<?php echo isset($updatingAnimalDetails["category"]) ? $updatingAnimalDetails["category"] : ''; ?>">
					</div>
					<div>
						<label>Avg. Body Temp</label>
						<input type="number" name="bodyTemperature" value="<?php echo isset($updatingAnimalDetails["bodyTemperature"]) ? $updatingAnimalDetails["bodyTemperature"] : ''; ?>">
					</div>
				</div>
			</div>

			<div class="cat-back" id="animal-bird" style="display: <?php if (isset($_GET['c_id'])) { if ($_GET['c_id'] == '2') echo 'block'; else echo 'none'; } else { echo 'none'; } ?>;">
				<div>
					<div>
						<label>Clutch Size</label>
						<input type="number" name="clutch" value="<?php echo isset($updatingAnimalDetails["clutch"]) ? $updatingAnimalDetails["clutch"] : ''; ?>">
					</div>
					<div>
						<label>Wingspan</label>
						<input type="number" name="wingspan" value="<?php echo isset($updatingAnimalDetails["wingspan"]) ? $updatingAnimalDetails["wingspan"] : ''; ?>">
					</div>
				<label>Nest Construction Method</label>
				<textarea name="nest" id="desc"><?php echo isset($updatingAnimalDetails["nest"]) ? $updatingAnimalDetails["nest"] : ''; ?></textarea>
					<div>
						<label>Can Fly</label>
						<select name="fly">
							<option value="yes" <?php if (isset($updatingAnimalDetails["fly"])) { if ($updatingAnimalDetails["fly"] == 'yes') echo 'selected'; } else { } ?>>Yes</option>
							<option value="no" <?php if (isset($updatingAnimalDetails["fly"])) { if ($updatingAnimalDetails["fly"] == 'no') echo 'selected'; } else { } ?>>No</option>
						</select>
					</div>
					<div>
						<label>Plumage Color</label>
						<select name="plumage">
							<option value="white" <?php if (isset($updatingAnimalDetails["plumage"])) { if ($updatingAnimalDetails["plumage"] == 'white') echo 'selected'; } else { } ?>>White</option>
							<option value="blue" <?php if (isset($updatingAnimalDetails["plumage"])) { if ($updatingAnimalDetails["plumage"] == 'blue') echo 'selected'; } else { } ?>>Blue</option>
							<option value="green" <?php if (isset($updatingAnimalDetails["plumage"])) { if ($updatingAnimalDetails["plumage"] == 'green') echo 'selected'; } else { } ?>>Green</option>
							<option value="violet" <?php if (isset($updatingAnimalDetails["plumage"])) { if ($updatingAnimalDetails["plumage"] == 'violet') echo 'selected'; } else { } ?>>Violet</option>
							<option value="purple" <?php if (isset($updatingAnimalDetails["plumage"])) { if ($updatingAnimalDetails["plumage"] == 'purple') echo 'selected'; } else { } ?>>Purple</option>
							<option value="red" <?php if (isset($updatingAnimalDetails["plumage"])) { if ($updatingAnimalDetails["plumage"] == 'red') echo 'selected'; } else { } ?>>Red</option>
							<option value="black" <?php if (isset($updatingAnimalDetails["plumage"])) { if ($updatingAnimalDetails["plumage"] == 'black') echo 'selected'; } else { } ?>>Black</option>
							<option value="pink" <?php if (isset($updatingAnimalDetails["plumage"])) { if ($updatingAnimalDetails["plumage"] == 'pink') echo 'selected'; } else { } ?>>Pink</option>
						</select>
					</div>
				</div>
			</div>

			<div class="cat-back" id="animal-fish" style="display: <?php if (isset($_GET['c_id'])) { if ($_GET['c_id'] == '3') echo 'block'; else echo 'none'; } else { echo 'none'; } ?>;">
				<div>
					<div>
						<label>Avg. Body Temp</label>
						<input type="number" name="bodyTemperature" value="<?php echo isset($updatingAnimalDetails["bodyTemperature"]) ? $updatingAnimalDetails["bodyTemperature"] : ''; ?>">
					</div>
					<div>
						<label>Water Type</label>
						<input type="text" name="waterType" value="<?php echo isset($updatingAnimalDetails["waterType"]) ? $updatingAnimalDetails["waterType"] : ''; ?>">
					</div>
					<div>
						<label>Color Variant</label>
						<select name="color">
							<option value="white" <?php if (isset($updatingAnimalDetails["plumage"])) { if ($updatingAnimalDetails["plumage"] == 'white') echo 'selected'; } else { } ?>>White</option>
							<option value="blue" <?php if (isset($updatingAnimalDetails["plumage"])) { if ($updatingAnimalDetails["plumage"] == 'blue') echo 'selected'; } else { } ?>>Blue</option>
							<option value="green" <?php if (isset($updatingAnimalDetails["plumage"])) { if ($updatingAnimalDetails["plumage"] == 'green') echo 'selected'; } else { } ?>>Green</option>
							<option value="violet" <?php if (isset($updatingAnimalDetails["plumage"])) { if ($updatingAnimalDetails["plumage"] == 'violet') echo 'selected'; } else { } ?>>Violet</option>
							<option value="purple" <?php if (isset($updatingAnimalDetails["plumage"])) { if ($updatingAnimalDetails["plumage"] == 'purple') echo 'selected'; } else { } ?>>Purple</option>
							<option value="red" <?php if (isset($updatingAnimalDetails["plumage"])) { if ($updatingAnimalDetails["plumage"] == 'red') echo 'selected'; } else { } ?>>Red</option>
							<option value="black" <?php if (isset($updatingAnimalDetails["plumage"])) { if ($updatingAnimalDetails["plumage"] == 'black') echo 'selected'; } else { } ?>>Black</option>
							<option value="pink" <?php if (isset($updatingAnimalDetails["plumage"])) { if ($updatingAnimalDetails["plumage"] == 'pink') echo 'selected'; } else { } ?>>Pink</option>
						</select>
					</div>
				</div>
			</div>

			<div class="cat-back" id="animal-repamp" style="display: <?php if (isset($_GET['c_id'])) { if ($_GET['c_id'] == '4') echo 'block'; else echo 'none'; } else { echo 'none'; } ?>;">
				 <div>
					<div>
						<label>Reproduction Type</label>
						<select name="reproduction">
							<option value="egg" <?php if (isset($updatingAnimalDetails["reproduction"])) { if ($updatingAnimalDetails["reproduction"] == 'egg') echo 'selected'; } else { } ?>>Egg</option>
							<option value="birth" <?php if (isset($updatingAnimalDetails["reproduction"])) { if ($updatingAnimalDetails["reproduction"] == 'birth') echo 'selected'; } else { } ?>>Birth</option>
						</select>
					</div>
					<div>
						<label>Avg. Clutch Size</label>
						<input type="number" name="clutch" value="<?php echo isset($updatingAnimalDetails["clutch"]) ? $updatingAnimalDetails["clutch"] : ''; ?>">
					</div>
					<div>
						<label>No. of Offspring</label>
						<input type="number" name="offspring" value="<?php echo isset($updatingAnimalDetails["offspring"]) ? $updatingAnimalDetails["offspring"] : ''; ?>">
					</div>
				</div>		
			</div>		

			<label>Sponsor</label>
			<select name="sponsorId" onchange="showSponserDetails(this)">
			<?php 
				$i = 0;
				foreach($sponsors as $row) {
					if (isset($updatingAnimalDetails["sponsorId"])) {
					 	if ($updatingAnimalDetails["sponsorId"] == $row['sponsorId']) 
							echo '<option value="' . $row['sponsorId'] . '" selected>' . $row['name'] . '</option>';
						else if ($updatingAnimalDetails["sponsorId"] == 'none' && (!$i++)) {
							echo '<option value="none" selected>None</option>'; 
							echo '<option value="' . $row['sponsorId'] . '">' . $row['name'] . '</option>';							
						}
						else {
							if (!$i++) echo '<option value="none">None</option>';
							echo '<option value="' . $row['sponsorId'] . '">' . $row['name'] . '</option>';							
						}
					} else { 
						if (!$i++) echo '<option value="none" selected>None</option>';
						echo '<option value="' . $row['sponsorId'] . '">' . $row['name'] . '</option>';
					}
				}				
			?>
			</select>

			<div class="cat-back" id="sponsor-details" <?php ?> style="display: <?php if (isset($updatingAnimalDetails)) { if ($updatingAnimalDetails['sponsorId'] != 'none') echo 'block'; else echo 'none'; } else echo 'none'; ?>;">
				<div>
					<div>
						<label>Sponsor Band</label>
						<select name="band">
							<option value="A" <?php if (isset($updatingAnimalDetails["band"])) { if ($updatingAnimalDetails["band"] == 'A') echo 'selected'; } else { }  ?>>A</option>
							<option value="B" <?php if (isset($updatingAnimalDetails["band"])) { if ($updatingAnimalDetails["band"] == 'B') echo 'selected'; } else { } ?>>B</option>
							<option value="C" <?php if (isset($updatingAnimalDetails["band"])) { if ($updatingAnimalDetails["band"] == 'C') echo 'selected'; } else { } ?>>C</option>
							<option value="D" <?php if (isset($updatingAnimalDetails["band"])) { if ($updatingAnimalDetails["band"] == 'D') echo 'selected'; } else { } ?>>D</option>
							<option value="E" <?php if (isset($updatingAnimalDetails["band"])) { if ($updatingAnimalDetails["band"] == 'E') echo 'selected'; } else { } ?>>E</option>
						</select>
					</div>
					<div>
						<label>Signage Area</label>
						<select name="signage">
							<option value="quarter" <?php if (isset($updatingAnimalDetails["signage"])) { if ($updatingAnimalDetails["signage"] == 'quarter') echo 'selected'; } else { }  ?>>Quarter</option>
							<option value="half" <?php if (isset($updatingAnimalDetails["signage"])) { if ($updatingAnimalDetails["signage"] == 'half') echo 'selected'; } else { } ?>>Half</option>
							<option value="full" <?php if (isset($updatingAnimalDetails["signage"])) { if ($updatingAnimalDetails["signage"] == 'full') echo 'selected'; } else { } ?>>Full</option>
						</select>
					</div>
					<div>
						<label>Total Price</label>
						<input type="text" name="price" value="<?php echo isset($updatingAnimalDetails["price"]) ? $updatingAnimalDetails["price"] : ''; ?>">
					</div>
					<div>
						<label>From</label>
						<input type="date" name="agreementFrom"  min="<?php echo date('Y-m-d'); ?>" value="<?php echo isset($updatingAnimalDetails["agreementFrom"]) ? $updatingAnimalDetails["agreementFrom"] : date('Y-m-d');; ?>">
					</div>
					<div>
						<label>To</label>
						<input type="date" name="agreementTo"  min="<?php echo date('Y-m-d'); ?>" value="<?php echo isset($updatingAnimalDetails["agreementTo"]) ? $updatingAnimalDetails["agreementTo"] : date('Y-m-d');; ?>">
					</div>
				</div>
			</div>

			<div class="form-sbmt">
				<input type="submit" name="add" value="Save">
			</div>
		</form>
	</div>
       

	</div>
</div>