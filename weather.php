<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Chunyang Ding - weather"; ?>
		<title><?php echo $page_name; ?></title>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php'; ?>
	</head>
	<body>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class="container">
			<div class="blurb">
			<h1> Here's the weather! </h1>
			<img src="https://forecast.weather.gov/meteograms/Plotter.php?lat=41.7985&lon=-87.5921&wfo=LOT&zcode=ILZ104&gset=10&gdiff=5&unit=0&tinfo=CY6&ahour=0&pcmd=11101111110000000000000000000000000000000000000000000000000&lg=en&indu=1!1!1!&dd=&bw=&hrspan=48&pqpfhr=6&psnwhr=6", style="width:2000px;height:auto;">
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>