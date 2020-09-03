<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Music - La Vie En Rose"; ?>
		<title><?php echo $page_name; ?></title>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php'; ?>
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class='container'>
			<div class='blurb'>
				<h1>La Vie En Rose</h1>
				
				<p> Recorded 29 March 2020 </p>
				
				<video width="1280" height=auto controls>
					<source src="/assets/vids/20200329_LaVieEnRose_2.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video> 

			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>