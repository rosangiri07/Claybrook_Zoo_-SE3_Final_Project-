<?php
	$title = 'Claybrook Sponsors';

	$isSponsorAddingSuccessful = false;
	$updatingSponsorsDetails = null;

	if (isset($_POST['add'])) {

		$SponsorsDetails = new DatabaseFunctions('sponsors');

		$imgName = $_FILES['signageImage']['name'];
		$tempPath = $_FILES['signageImage']['tmp_name'];
		$finalPath = '../../assets/images/sponsors/' . $imgName;
		move_uploaded_file($tempPath, $finalPath);

		$_POST['signageImage'] = $finalPath;

		$criteria = [
			'sponsorId'=>$_POST['sponsorId'],
			'name'=>$_POST['name'],
			'existingCustomer'=>$_POST['existingCustomer'],
			'companyID'=>$_POST['companyID'],
			'primaryNumber'=>$_POST['primaryNumber'],
			'secondaryNumber'=>$_POST['secondaryNumber'],
			'country'=>$_POST['country'],
			'city'=>$_POST['city'],
			'street'=>$_POST['street'],
			'note'=>$_POST['note'],
			'agreement'=>$_POST['agreement'],
			'signageImage'=>$_POST['signageImage'],
			'payment'=>$_POST['payment'],
			'paymentReceived'=>$_POST['paymentReceived'],
			'reviewDate'=>$_POST['reviewDate'],
			'signedDate'=>$_POST['signedDate']
		];
		$SponsorsDetails->save($criteria,'sponsorId');

		$isSponsorAddingSuccessful = true;
	}

	if (isset($_GET['s_id'])) {
		$SponsorsDetails1 = new DatabaseFunctions('sponsors');
		$updatingSponsorsDetails = $SponsorsDetails1->find('sponsorId', $_GET['s_id'])->fetch();
	}

	$content = loadTemp('../template/sponsor_manage_template.php',['isSponsorAddingSuccessful'=>$isSponsorAddingSuccessful, 'updatingSponsorsDetails'=>$updatingSponsorsDetails]);
?>
