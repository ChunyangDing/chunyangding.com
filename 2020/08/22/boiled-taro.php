<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Recipe - Boiled Taro"; ?>
		<title><?php echo $page_name; ?></title>
		<link rel="stylesheet" type="text/css" href="/css/main.css">
		<link rel="stylesheet" type="text/css" href="/css/dropdown.css">
		<link rel="stylesheet" type="text/css" href="/css/recipes.css">
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class='container'>
			<div class='recipe'>
				<h1>Boiled Taro </h1>
				
				<p> This is a traditional food to be eaten during mid-autumn festival (中秋节）. Usually goes together with 毛豆/shelled edaname. 
											
				<p> Ingredients </p>
				<ul>
					<li> Small round taro - need to inspect to make sure there are no rotting/black/soft spots on the taro. There will often be taro with bad spots on them, so need to carefully inspect. Do not purchase taro with mold on it. </li>
					<li> Powdered sugar </li>
				</ul> 
				
				<p> Instructions </p> 
				<ol>
					<li> Soak in water. DO NOT SCRUB WITH YOUR HANDS, the skin of the taro will make your hands very itchy. </li> 
					<li> Boil a large pot of water. </li>
					<li> Put small taro in pot and cover with lid. Boil with the skin on until a chopstick can easily poke through an entire taro. </li>
					<li> Drain water in a collander - the skin will no longer be irritating. </li>
					<li> Serve with a plate of powdered sugar on the side. Peel the skin off as you eat. As you peel, dip in the powdered sugar. </li> 
					<li> Often, serve with boiled edaname on the side. For the edaname, cut off the two ends and boil with a bit of salt (optional). </li> 
				</ol> 
								
				<p> <a href="/food">Back to All Recipes </a> </p>
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>