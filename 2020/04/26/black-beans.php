<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Recipe - Black Beans"; ?>
		<title><?php echo $page_name; ?></title>
		<link rel="stylesheet" type="text/css" href="/css/main.css">
		<link rel="stylesheet" type="text/css" href="/css/dropdown.css">
		<link rel="stylesheet" type="text/css" href="/css/recipes.css">
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class='container'>
			<div class='recipe'>
				<h1>Black Beans</h1>
				
				<p> This is about as simple of a recipe as is possible, although it takes a while for the dish to really reduce and thicken. I think you could probably get away with using less water and using chicken boullion instead to have more concentrated flavor, but I think the slow simmer really allows the beans to become soft and tender. Makes an excellent side dish for any meal! </p>
				
				<p> Ingredients </p>
				<ul>
					<li> 1 can of black beans </li>
					<li> 1 onion </li>
					<li> 1 pint chicken stock </li>
					<li> Garlic </li>
					<li> Olive oil </li>
					<li> Salt, pepper, smoked paprika, oregano, cumin, bay leaf </li>
				</ul>
				
				<p> Instructions </p>
				<ol>
					<li> Dice onions and fry with olive oil, garlic, until soft. </li>
					<li> Add in black beans, chicken stock, and all spices. Bring to a low boil and then let simmer slowly. When adding in the chicken stock, it will look more soupy - simmer with lid uncovered until it becomes a much thicker paste-like dish. Stir with wooden spoon to prevent sticking to the bottom ever 10ish minutes. </li>
				</ol>
				
				<p> <a href="/food">Back to All Recipes </a> </p>
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>