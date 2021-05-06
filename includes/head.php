<?php 
require_once "functions.php";
//query za ispis svih item-a iz baza podataka
$queru=query("SELECT * FROM item");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>	CITRUS SYSTEM</title>
	<meta name="description" content="Kite Coming Soon HTML Template by Jewel Theme" >
	<meta name="author" content="Jewel Theme">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">

	<link href="assets/css/font-awesome.min.css" rel="stylesheet">

	<link href="assets/css/style.css" rel="stylesheet">

</head>
<body>

	<!-- Main Menu -->
	<div id="main-menu" class="navbar navbar-default navbar-fixed-top" role="navigation">
		<nav class="navbar navbar-expand navbar-light bg-light">
			<ul class="navbar-nav ms-auto">
				<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>&nbsp&nbsp
				<li class="nav-item"><a href="login.php" class="nav-link">Admin</a></li>
			</ul>
		</nav>
	</div>