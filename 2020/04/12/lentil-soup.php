<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Recipe - Lentil Soup"; ?>
		<title><?php echo $page_name; ?></title>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php'; ?>
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class='container'>
			<div class='recipe'>
				<h1>Lentil Soup</h1>
								
				<p> I tried out this recipe from <a href="https://cookieandkate.com/best-lentil-soup-recipe/comment-page-10/">Cookie and Kate</a> recently. While my version isn't quite there yet, I wanted to note down the basic steps for future editing! </p> 
				
				<p> Ingredients </p>
				<ul>
					<li> Olive Oil </li>
					<li> Canned Lentils </li>
					<li> Onion </li>
					<li> Garlic </li>
					<li> Carrots </li>
					<li> 1qt/4 cups of chicken/vegetable broth </li>
					<li> Canned diced tomatoes </li>
					<li> Collard Greens </li>
					<li> Spices - Cumin, Curry Powder (Coriander, Cumin, Ginger, Chili Pepper), Thyme, Salt, Red Pepper Flakes, Black Pepper </li>
					<li> Lemon Juice, Fresh </li>
				</ul>
				
				<p> Instructions </p>
				<ol>
					<li> Chop and prepare onions, garlic, and carrots. Smaller pieces seem to work better and melt into the soup. </li>
					<li> Pour olive oil into large pot over medium heat. More oil is better for this recipe. </li>
					<li> When the oil looks shimmery, slide in the onions and carrots. Cook until translucent. </li>
					<li> Add garlic, cumin, thyme, and curry powder, and stir until fragrant. Pour in tomatoes and cook until they no longer taste like they came from a tin.  </li>
					<li> Add lentils, broth, and however much water you want. Bring to a boil, and reduce to a simmer. Cook until lentils are starting to melt. </li>
					<li> At this point, season until things start to taste right, especially with salt, freshly ground black pepper, and red pepper flakes. </li>
					<li> Add in chopped greens and cook until softened. Remove from heat and add in lemon juice until you feel like there is a good zing to it. Serve while hot. </li>
				</ol>
				
				<p> <a href="/food">Back to All Recipes </a> </p>
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>