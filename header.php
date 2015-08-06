<?php include('function.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<h1> My first PHP site</h1>
		</div>
	</div>

	<div class="col-xs-12">
		<ul class="nav nav-pills">
			<li class="<?php is_page('index'); ?>"><a href="index.php">index</a></li>
			<li class="<?php is_page('about'); ?>"><a href="about.php">About</a></li>
			<li class="<?php is_page('contact'); ?>"><a href="contact.php">contact</a></li>
		</ul>
	</div>


