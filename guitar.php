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
				<p> I started learning how to play the guitar in January 2020. My goal is to walk into a crowded room, whip out my acoustic, and say "Anyways, here's Wonderwall." My goal is to <a href="https://reductress.com/post/man-learning-guitar-plans-to-ruin-first-party-after-this-is-all-over/"> become this man.</a> </p>
				
				<h2> <a href="/music/la-vie-en-rose"> La Vie En Rose </a> </h2>
				
				<h2> <a href="/music/falling-slowly"> Falling Slowly</a> </h2>
				
				<h2> <a href="/music/cornerstone"> Cornerstone </a> </h2>
				
				<h2> <a href="/music/10000-reasons"> 10,000 Reasons </a> </h2>
				
				<h2> <a href="/music/if-you-want-me"> If You Want Me </a> </h2>
				
				<h2> <a href="/all-songs"> List of all songs </a> </p>

			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>