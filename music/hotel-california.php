<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Music - Hotel California"; ?>
		<title><?php echo $page_name; ?></title>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php'; ?>
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class='container'>
			<div class='blurb'>
				<h1>Hotel California by The Eagles</h1>
				
				<p> Recorded 01 Jan 2021 </p>
				
				<video width="480" height=auto controls>
					<source src="/assets/vids/20210101_HotelCalifornia.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video> 
				
				<p> <a href="/assets/files/hotel-california.txt" download> Chord sheet download here </a> </p> 


			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>