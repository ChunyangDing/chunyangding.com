<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Chunyang Ding - Cooking"; ?>
		<title><?php echo $page_name; ?></title>
		<link rel="stylesheet" type="text/css" href="/css/main.css">
		<link rel="stylesheet" type="text/css" href="/css/dropdown.css">
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class='container'>
			<div class='blurb'>
				<h1>Recipes</h1>
				<p> <a href="/2020/03/30/honey-soy-salmon">Honey Soy Salmon</a> </p>
				<p> <a href="/2020/03/30/smashed-cucumbers">Smashed Cucumbers</a></p>
				<p> <a href="/2020/03/31/stir-fried-tomatoes-and-egg">Stir Fried Tomatoes and Egg </a> </p>
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>