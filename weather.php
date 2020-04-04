<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Chunyang Ding - weather"; ?>
		<title><?php echo $page_name; ?></title>
		<link rel="stylesheet" type="text/css" href="/css/main.css">
		<link rel="stylesheet" type="text/css" href="/css/dropdown.css">
	</head>
	<body>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class="container">
			<div class="blurb">
			<h1> Here's the weather! </h1>
			<img src="https://forecast.weather.gov/meteograms/Plotter.php?lat=39.0078&lon=-76.9232&wfo=LWX&zcode=MDZ013&gset=18&gdiff=3&unit=0&tinfo=EY5&ahour=0&pcmd=11011111100000000000000000000000000000000000000000000000000&lg=en&indu=1!1!1!&dd=&bw=&hrspan=48&pqpfhr=6&psnwhr=6", style="width:2000px;height:auto;">
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>