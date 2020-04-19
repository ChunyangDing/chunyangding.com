<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Chunyang Ding - Music"; ?>
		<title><?php echo $page_name; ?></title>
		<link rel="stylesheet" type="text/css" href="/css/main.css">
		<link rel="stylesheet" type="text/css" href="/css/dropdown.css">
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class='container'>
			<div class='blurb'>
				<h1>Guitar Playing</h1>
				<p> I started learning how to play the guitar in January 2020. My goal is to walk into a crowded room, whip out my acoustic, and say "Anyways, here's Wonderwall." My goal is to <a href="https://reductress.com/post/man-learning-guitar-plans-to-ruin-first-party-after-this-is-all-over/
"> become this man.</a> </p>
				
				<h2> 29 Mar 2020 - La Vie En Rose </h2>
				<video width="1280" height=auto controls>
					<source src="/assets/vids/20200329_LaVieEnRose_2.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video> 
				
				<h2> 12 Apr 2020 - Falling Slowly </h2>
				<video width="1280" height=auto controls>
					<source src="/assets/vids/20200412_FallingSlowly_4.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video> 
				
				<h2> 19 Apr 2020 - Cornerstone </h2>
				<video width="1280" height=auto controls>
					<source src="/assets/vids/20200419_Cornerstone.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video> 
				
				<h2> 19 Apr 2020 - 10,000 Reasons </h2>
				<video width="1280" height=auto controls>
					<source src="/assets/vids/20200419_10000Reasons.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video> 

			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>