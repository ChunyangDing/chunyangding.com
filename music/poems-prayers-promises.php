<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Music - Poems Prayers and Promises"; ?>
		<title><?php echo $page_name; ?></title>
		<link rel="stylesheet" type="text/css" href="/css/main.css">
		<link rel="stylesheet" type="text/css" href="/css/dropdown.css">
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class='container'>
			<div class='blurb'>
				<h1>Poems, Prayers, and Promises</h1>
				
				<p> Recorded 10 May 2020 </p>
				
				<video width="1280" height=auto controls>
					<source src="/assets/vids/20200510_PoemsPrayersPromises.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video> 
				
				<p> <a href="/assets/files/poems-prayers-promises.txt" download> Chord sheet download here </a> </p> 


			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>