<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Music - Wild Montana Skies"; ?>
		<title><?php echo $page_name; ?></title>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php'; ?>
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class='container'>
			<div class='blurb'>
				<h1>Wild Montana Skies</h1>
				
				<p> Recorded 11	Sept 2020 </p>
				<p> Yeeeehawwww</p>
				
				<video width="480" height=auto controls>
					<source src="/assets/vids/20200911_WildMontanaSkies.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video> 
				
				<p> <a href="/assets/files/wild-montana-skies.txt" download> Chord sheet download here </a> </p> 


			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>