<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../assets/css/visitor.css">
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
				<li><a href="index.php">Claybrook Zoo</a></li>
				<li><a href="index.php?page=animal.php">Animals</a></li>
				<li><a href="index.php?page=sponsor.php">Sponsor</a></li>
				<li><a href="index.php?page=map.php">Map</a></li>
			</ul>
		</div>
	</div>
</header>


<div class="home-content">
	<?php echo $content; ?>
</div>

<footer>
	<div class="footer">
		<p>Follow Us On</p>
		<div class="social-footer">
			<div class="social-links">
				<a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
			</div>
		</div>

	</div>
</footer>

</body>
</html>