<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Redirect"; ?>
		<title><?php echo $page_name; ?></title>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php'; ?>
	</head>
	<body>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class="container">
			<div class="blurb">
				<p> Click me to go to <a href="http://schusterlab.uchicago.edu">Schuster Lab Website</a> </p> 
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>