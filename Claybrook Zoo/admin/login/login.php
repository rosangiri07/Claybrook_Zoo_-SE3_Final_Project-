<?php 
	include '../../connect/connect.php';
	include '../classes/databaseFunctions.php';

	if (isset($_SESSION['adminId'])) {
		header('Location:http://localhost:8080/cbz00/admin/public_html/index.php');
	}

	if (isset($_POST['submit'])) {
		$admindetails = new DatabaseFunctions('admin');
		$singleAdminInformation = $admindetails->find('username', $_POST['username']);

		if ($singleAdminInformation->rowCount() > 0) {
			$singleAdminInformation = $singleAdminInformation->fetch();
			if (password_verify($_POST['password'], $singleAdminInformation['password'])) {
				$_SESSION['adminId'] = $singleAdminInformation['adminId'];
				header('Location:http://localhost:8080/cbz00/admin/public_html/index.php');
			}
			else { 
				header("Location: login.php?msg=wrongpassowrd");
			}
		}
		else {
				header("Location: login.php?msg=wrongusername");
		}

	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Claybrook Zoo Login Page</title>
	<link rel="stylesheet" type="text/css" href="../../assets/css/login.css">
</head>
<body>

<div class="container">

	<section class="center-container">

		<div class="login-title">
			<span><img src="../../assets/images/Zoo Logo-Colours.jpg"></span><span>Claybrook Zoo</span>
		</div>
		<div class="login-msg">
			<div class="border-white">
				<h1>Log into Claybrook</h1>
				<?php 
					if (isset($_GET['msg'])) {
						if ($_GET['msg'] == 'wrongusername') {
							echo '<p class="error">Please enter a valid username.</p>';
						} elseif ($_GET['msg'] == 'wrongpassowrd') {
							echo '<p class="error">Please enter a valid password.</p>';
						} elseif ($_GET['msg'] == 'logout') {
							echo '<p>Logged Out.</p>';
						}
					} else {
						echo "<p><Please enter your username and password.</p>";
					}
				?>
			</div>
			<form  action="" method="POST" class="login-form">
				<div>
					<label>Username</label>
					<input type="text" name="username">
				</div>
				<div>
					<label>Password</label>
					<input type="password" name="password">
				</div>
				<input type="submit" name="submit">
			</form>
		</div>
		
	</section>
</div>

</body>
</html>

		