<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Chunyang Ding - 404"; ?>
		<title><?php echo $page_name; ?></title>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php'; ?>
	</head>
	<body>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class="container">
			<div class="blurb">
			<h1> Well, this is embarrassing. </h1>
			<p> Looks like I've led you into a dead end! <a href="/index">Want to try again?</a> </p>
			<p> \[ \frac{1}{2} \] </p> 
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>