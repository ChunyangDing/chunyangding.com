<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Music - Put Your Records On"; ?>
		<title><?php echo $page_name; ?></title>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php'; ?>
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class='container'>
			<div class='blurb'>
				<h1>Put Your Records On</h1>
				<p> By Corrine Bailey Rae </p>
				
				<p> Recorded 17 Sept 2020 </p>
				
				<p> </p>
				
				<video width="480" height=auto controls>
					<source src="/assets/vids/20200917_PutYourRecordsOn.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video> 
				
				<p> <a href="/assets/files/put-your-records-on.txt" download> Chord sheet download here </a> </p> 


			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>