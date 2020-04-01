<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "shrug"; ?>
		<title><?php echo $page_name; ?></title>
		<link rel="stylesheet" type="text/css" href="/css/main.css">
		<link rel="stylesheet" type="text/css" href="/css/dropdown.css">
	</head>
	<body>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class="container">
			<div class="blurb">
			<h1>  ¯\_(ツ)_/¯ </h1>
			<button onclick="copyVal('¯\\_(ツ)_/¯')">¯\_(ツ)_/¯</button> 
			<script src="/assets/copyVal.js"></script> 
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>