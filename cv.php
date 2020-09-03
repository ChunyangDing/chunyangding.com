<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Chunyang Ding - CV"; ?>
		<title><?php echo $page_name; ?></title>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php'; ?>
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class='container'>
			<div class='blurb'>
				<h1>Chunyang Ding's Resume</h1>
				<center> <img src="/assets/pics/DingResume.png" alt="Chunyang Ding's Resume" style="width:800px;height:auto;" class="center"> </center>
				<p> <a href="/assets/files/DingResume.pdf">PDF of my Resume</a>(last updated: 1/2020) </p>				
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>