<div>
	<div class="head-msg">
		<h1 class="head-title">Manage Sponsor</h1>
		<?php
			if ($isSponsorAddingSuccessful) {
				echo "<p class=\"valid\">Sponsor saved successfully!</P>";
			} 
		?>
	</div>

	
	<div class="form-box">
		<div class="zoo-form">
		<form action="index.php?page=sponsor_manage.php" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="sponsorId" required value="<?php echo isset($updatingSponsorsDetails["sponsorId"]) ? $updatingSponsorsDetails["sponsorId"] : ''; ?>">
			<div>
				<div>
					<label>Company ID</label>
					<input type="text" name="companyID" value="<?php echo isset($updatingSponsorsDetails["companyID"]) ? $updatingSponsorsDetails["companyID"] : ''; ?>" required>
				</div>
				<div>
					<label>Sponsor Name</label>
					<input type="text" name="name" value="<?php echo isset($updatingSponsorsDetails["name"]) ? $updatingSponsorsDetails["name"] : ''; ?>" required>
				</div>
			</div>
			<div>
				<div>
				<label>Primary Number</label>
				<input type="text" name="primaryNumber" value="<?php echo isset($updatingSponsorsDetails["primaryNumber"]) ? $updatingSponsorsDetails["primaryNumber"] : ''; ?>" required>
				</div>
				<div>
				<label>Secondary Number</label>
				<input type="text" name="secondaryNumber" value="<?php echo isset($updatingSponsorsDetails["secondaryNumber"]) ? $updatingSponsorsDetails["secondaryNumber"] : ''; ?>" required>
				</div>
			</div>
			
			<div class="sp-btn three-input">
				<div>
					<label>Country</label>
					<input type="text" name="country" value="<?php echo isset($updatingSponsorsDetails["country"]) ? $updatingSponsorsDetails["country"] : ''; ?>" required>
				</div>
				<div>
					<label>City</label>
					<input type="text" name="city" value="<?php echo isset($updatingSponsorsDetails["city"]) ? $updatingSponsorsDetails["city"] : ''; ?>" required>
				</div>
				<div>
					<label>Street</label>
					<input type="text" name="street" value="<?php echo isset($updatingSponsorsDetails["street"]) ? $updatingSponsorsDetails["street"] : ''; ?>" required>
				</div>
			</div>
			
			<label>Signage Image</label>
			<input type="file" name="signageImage">
			<label>Special Note</label>
			<textarea name="note" id="desc"><?php echo isset($updatingSponsorsDetails["note"]) ? $updatingSponsorsDetails["note"] : ''; ?></textarea>
			<label>Customer Agreement</label>
			<textarea name="agreement" id="desc"><?php echo isset($updatingSponsorsDetails["agreement"]) ? $updatingSponsorsDetails["agreement"] : ''; ?></textarea>

			<div class="sp-btn four-input">
				<div>
					<label>Existing Customer</label>
					<select name="existingCustomer">
						<option value="no" <?php if (isset($updatingSponsorsDetails["existingCustomer"])) { if ($updatingSponsorsDetails["existingCustomer"] == 'no') echo 'selected'; } else { }  ?>>No</option>
						<option value="yes" <?php if (isset($updatingSponsorsDetails["existingCustomer"])) { if ($updatingSponsorsDetails["existingCustomer"] == 'yes') echo 'selected'; } else { } ?>>Yes</option>
					</select>
				</div>
				<div>
			
					<label>Payment Detail</label>
					<select name="payment">
						<option value="cash" <?php if (isset($updatingSponsorsDetails["payment"])) { if ($updatingSponsorsDetails["payment"] == 'cash') echo 'selected'; } else { }  ?>>Cash</option>
						<option value="credit" <?php if (isset($updatingSponsorsDetails["payment"])) { if ($updatingSponsorsDetails["payment"] == 'credit') echo 'selected'; } else { } ?>>Credit</option>
						<option value="debit" <?php if (isset($updatingSponsorsDetails["payment"])) { if ($updatingSponsorsDetails["payment"] == 'debit') echo 'selected'; } else { } ?>>Debit</option>
						<option value="check" <?php if (isset($updatingSponsorsDetails["payment"])) { if ($updatingSponsorsDetails["payment"] == 'check') echo 'selected'; } else { } ?>>Check</option>
					</select>
				</div>
				<div>
					<label>Payment Received</label>
					<select name="paymentReceived">
						<option value="no" <?php if (isset($updatingSponsorsDetails["paymentReceived"])) { if ($updatingSponsorsDetails["paymentReceived"] == 'no') echo 'selected'; } else { }  ?>>No</option>
						<option value="yes" <?php if (isset($updatingSponsorsDetails["paymentReceived"])) { if ($updatingSponsorsDetails["paymentReceived"] == 'yes') echo 'selected'; } else { } ?>>Yes</option>
					</select>
				</div>
				<div>
					<label>Review Date</label>
					<input type="date" name="reviewDate"  min="<?php echo date('Y-m-d'); ?>" value="<?php echo isset($updatingSponsorsDetails["reviewDate"]) ? $updatingSponsorsDetails["reviewDate"] : date('Y-m-d');; ?>">
				</div>
			</div>
			<label>Signed By</label>
			<input type="text" name="signedDate" value="<?php echo isset($updatingSponsorsDetails["signedDate"]) ? $updatingSponsorsDetails["signedDate"] : ''; ?>" required>
				<div class="form-sbmt">
					<input type="submit" name="add" value="Save">
				</div>
		</form>
	</div>
       

	</div>
</div>