<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../assets/css/admin.css">
	<script type="text/javascript" src="../../assets/js/claybrook.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

<header>
	<div class="logo">
		<img src="../../assets/images/Zoo Logo-Colours.jpg">
		<span>Claybrook Zoo</span>
	</div>

	<div class="nav-log">
		<div class="browse-navigation">
			<ul>
				<li><a href="index.php?page=dashboard.php">Dashboard</a></li>
				<li><a href="index.php?page=animal.php">Animals</a></li>
				<li><a href="index.php?page=animal_archive.php">Archives</a></li>
				<li><a href="index.php?page=sponsor.php">Sponsors</a></li>
			</ul>
		</div>

		<div class="logout">
			<a href="../login/logout.php"><i class="fa fa-power-off" title="logout"></i></a>
		</div>
	</div>
</header>


<div class="container">
	<?php echo $content; ?>
</div>



</body>
</html>