<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Recipe - Wintermelon Ham Soup"; ?>
		<title><?php echo $page_name; ?></title>
		<link rel="stylesheet" type="text/css" href="/css/main.css">
		<link rel="stylesheet" type="text/css" href="/css/dropdown.css">
		<link rel="stylesheet" type="text/css" href="/css/recipes.css">
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class='container'>
			<div class='recipe'>
				<h1>Wintermelon Ham Soup(火腿冬瓜汤）</h1>
											
				<p> Ingredients </p>
				<ul>
					<li> Sliced winter melon </li>
					<li> Salted ham piece </li>
				</ul> 
				
				<p> Instructions </p> 
				<ol>
					<li> Chop the salted ham into small chunks and boil in water. </li>
					<li> Chop winter melon into large chunks and add to boiling ham soup. </li> 
					<li> Continue boiling until winter melon becomes translucent. </li> 
				</ol> 
								
				<p> <a href="/food">Back to All Recipes </a> </p>
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>