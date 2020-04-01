<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "shrug"; ?>
		<title><?php echo $page_name; ?></title>
		<link rel="stylesheet" type="text/css" href="/css/main.css">
		<link rel="stylesheet" type="text/css" href="/css/dropdown.css">
		
		<style>
		.button {
			background-color: #5e7f79;
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 100px;
			border-radius: 4px;
		}
		
		.emailCopy {
			background-color: #fffff8;
			border: none;
			color: #0000EE;
			padding: 5px 5px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 1.4em;
			border-radius: 0px;
			font-family: "Helvetica", "Arial", "Sans-Serif";
		}
		</style>
		
	</head>
	
	<body>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class="container">
			<div class="blurb">
			<h1>  ¯\_(ツ)_/¯ </h1>
			<button class = "button" onclick="copyVal('¯\\_(ツ)_/¯')">¯\_(ツ)_/¯</button> 
			<br>
			<p> test post please ignore</p>			
			<button class = "emailCopy" onclick="copyVal('me@chunyangding.com')">me@chunyangding.com</button> 
			<script src="/assets/copyVal.js"></script> 
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
	
</html>