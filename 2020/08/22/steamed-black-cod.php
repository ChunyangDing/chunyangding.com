<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Recipe - Steamed Black Cod"; ?>
		<title><?php echo $page_name; ?></title>
		<link rel="stylesheet" type="text/css" href="/css/main.css">
		<link rel="stylesheet" type="text/css" href="/css/dropdown.css">
		<link rel="stylesheet" type="text/css" href="/css/recipes.css">
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class='container'>
			<div class='recipe'>
				<h1>Steamed Black Cod</h1>
											
				<p> Ingredients </p>
				<ul>
					<li> Fresh black cod. Can be purchased at Costco or any Chinese grocery</li>
					<li> Cooking wine, salt, scallion </li>
				</ul> 
				
				<p> Instructions </p> 
				<ol>
					<li> Purchase fresh black cod, headless and cleaned. </li>
					<li> Chop into a few segments, and wash the outside. </li>
					<li> Place in bowl, add some cooking wine, salt, scallion, and place in steamer for 15 minutes. </li> 
					<li> The flesh should be ready to fall off after 15 minutes. Remove the bowl and serve immediately. </li>
				</ol> 
								
				<p> <a href="/food">Back to All Recipes </a> </p>
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>