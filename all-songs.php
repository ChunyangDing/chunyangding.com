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
				<h1>All Songs</h1>
				
				<h2> <a href="/music/la-vie-en-rose"> 29 Mar 2020 - La Vie En Rose </a> </h2>
				<video width="1280" height=auto controls>
					<source src="/assets/vids/20200329_LaVieEnRose_2.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video> 
				
				<h2> <a href="/music/falling-slowly"> 12 Apr 2020 - Falling Slowly</a> </h2>
				<video width="1280" height=auto controls>
					<source src="/assets/vids/20200412_FallingSlowly_4.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video> 
				
				<h2> <a href="/music/cornerstone"> 19 Apr 2020 - Cornerstone </a> </h2>
				<video width="1280" height=auto controls>
					<source src="/assets/vids/20200419_Cornerstone.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video> 
				
				<h2> <a href="/music/10000-reasons"> 19 Apr 2020 - 10,000 Reasons </a> </h2>
				<video width="1280" height=auto controls>
					<source src="/assets/vids/20200419_10000Reasons.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video> 
				
				<h2> <a href="/music/if-you-want-me"> 25 Apr 2020 - If You Want Me </a> </h2>
				<video width="1280" height=auto controls>
					<source src="/assets/vids/20200425_IfYouWantMe.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video> 

			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>