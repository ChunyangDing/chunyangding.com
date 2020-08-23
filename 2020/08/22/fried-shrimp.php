<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Recipe - Fried Shrimp"; ?>
		<title><?php echo $page_name; ?></title>
		<link rel="stylesheet" type="text/css" href="/css/main.css">
		<link rel="stylesheet" type="text/css" href="/css/dropdown.css">
		<link rel="stylesheet" type="text/css" href="/css/recipes.css">
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class='container'>
			<div class='recipe'>
				<h1>Fried Shrimp</h1>
											
				<p> Ingredients </p>
				<ul>
					<li> Whole shrimp </li>
					<li> Rice wine, salt </li>
					<li> Soy sauce, sugar </li>
				</ul> 
				
				<p> Instructions </p> 
				<ol>
					<li> Purchase large, with head, shrimp. </li>
					<li> Soak shrimp in rice wine and salt. </li>
					<li> In pan, drizzle oil and fry all of the shrimp at once, in a single layer. Fry both sides of shrimp until a bit of burning on either side. </li> 
					<li> Add light soy sauce, sugar, to taste. </li>
				</ol> 
								
				<p> <a href="/food">Back to All Recipes </a> </p>
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>