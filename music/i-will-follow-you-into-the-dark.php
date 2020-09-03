<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Music - I Will Follow You Into The Dark"; ?>
		<title><?php echo $page_name; ?></title>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php'; ?>
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class='container'>
			<div class='blurb'>
				<h1>I Will Follow You Into The Dark</h1>
				
				<p> Recorded 25 Aug 2020 </p>
				
				<video width="852" height=auto controls>
					<source src="/assets/vids/20200825_IntoTheDark.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video> 
				
				<p> <a href="/assets/files/i-will-follow-you-into-the-dark.txt" download> Chord sheet download here </a> </p> 


			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>