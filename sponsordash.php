<?php
session_start();
include("functions.php");

?>

<html>

<head>
	<link rel="icon" type="image/x-icon" href="../iii/images/sfs_new.png" />
	<img class="in" src="../iii/images/sfs_new.png" />
	<div class="absolute">
		<h1>Starter for Startups</h1>
	</div>
	<title>Sponsor Dashboard</title>
	<link rel="icon" type="image/x-icon" href="../iii/images/favicons.png" />
	<style>
		div.absolute {
			color: goldenrod;
			position: relative;
			font-size: 20px;
			top: -30px;
			left: 20px;
		}

		img.in {
			position: relative;
			border-radius: 100%;
			height: 90px;
			width: 90px;
			left: 4px;
			top: 0px;
		}

		body {
			background: url("https://imagekit.io/static/img/newPages/homepage-wave-bg.svg");
			font-family: "Arial", Serif;
			background-color: #f4f4f4;
			overflow-x: hidden;
		}


		.navbar a {
			float: left;
			display: block;
			color: #f2f2f2;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
			font-size: 17px;
		}

		.navbar a:hover {
			background-color: #ddd;
			color: #000;
		}

		.side-nav {
			height: 100%;
			width: 0;
			position: fixed;
			z-index: 1;
			top: 0;
			left: 0;
			background-color: #111;
			opacity: 0.9;
			overflow-x: hidden;
			padding-top: 60px;
			transition: 0.5s;
		}

		.side-nav a {
			padding: 10px 10px 10px 30px;
			text-decoration: none;
			font-size: 22px;
			color: #ccc;
			display: block;
			transition: 0.3s;
		}

		.side-nav a:hover {
			color: #fff;
		}

		.side-nav .btn-close {
			position: absolute;
			top: 0;
			right: 22px;
			font-size: 36px;
			margin-left: 50px;
		}

		#main {
			transition: margin-left 0.5s;
			padding: 20px;
			overflow: hidden;
			width: 100%;
		}

		@media(max-width:568px) {
			.navbar-nav {
				display: none
			}
		}

		@media(min-width:568px) {}

		.column {
			float: left;
			width: 50%;
			height: 22%;
			border-radius: 5px;
		}


		.card {
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
			padding: 2px 16px;
			text-align: center;
			background-color: #414656;
			border-radius: 5px;
			margin: 30px;
		}

		.card:hover {
			box-shadow: 0 8px 16px 0 #008DFF;

		}

		h4,
		p {
			color: white;
		}

		#ptag {
			float: right;
		}

		#pleft {
			float: left;
		}

		img.in {
			display: inline;
			border-radius: 100%;
			height: 40px;
			width: 50px;
			margin-left: -2px;
		}

		h1.intro {
			color: red;
			display: inline;
		}
	</style>
</head>

<body>

	<nav style="position:relative; top:-50px;" class="navbar">
		<span class="open-slide">
			<a href="#" onclick="openSlideMenu()">
				<svg width="30" height="30">
					<path d="M0,5 30,5" stroke="#111" stroke-width="5" />
					<path d="M0,14 30,14" stroke="#111" stroke-width="5" />
					<path d="M0,23 30,23" stroke="#111" stroke-width="5" />
				</svg>
			</a>
		</span>
	</nav>
	<br>
	<br>
	<br>
	<h1 align="center">Recent List of Start-Up's</h1>

	<?php

	$query = "select * from `enter`    ";

	if (count(fetchAll($query)) > 0) {
		foreach (fetchAll($query) as $row) {
	?>
			<div id="req">

				<div class="row">
					<div class="column">
						<div class="card">
							<p id="pleft"><?php echo $row['share'] ?> %</p>
							<p id="ptag"><?php echo $row['amount'] ?>INR</p>
							<h4><b><?php echo $row['startupname'] ?></b></h4>
							<p><?php echo $row['abstract'] ?></p>
							<p><?php echo $row['email'] ?></p>
						</div>
					</div>


				</div>
			</div>
	<?php
		}
	} else {
		echo "No Previous Records ";
	}
	?>

	<div id="side-menu" class="side-nav">
		<a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
		<a href="#">Dashboard</a>
		<a href="#">Home</a>
		<a href="senddetails.php">Send Request</a>
		<a href="sponsor.php">Sponsorings </a>
		<a href="sponsorlist.php">Your Sponsorships </a>
		<a href="smessages.php">My Messages</a>
		<a href="index.html"> Log Out </a>
	</div>

	<script>
		function openSlideMenu() {
			document.getElementById('side-menu').style.width = '250px';
			document.getElementById('main').style.marginLeft = '250px';
		}

		function closeSlideMenu() {
			document.getElementById('side-menu').style.width = '0';
			document.getElementById('main').style.marginLeft = '0';
		}
	</script>
</body>

</html>