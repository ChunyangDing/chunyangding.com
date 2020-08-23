<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Recipe - Oxtail Soup"; ?>
		<title><?php echo $page_name; ?></title>
		<link rel="stylesheet" type="text/css" href="/css/main.css">
		<link rel="stylesheet" type="text/css" href="/css/dropdown.css">
		<link rel="stylesheet" type="text/css" href="/css/recipes.css">
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class='container'>
			<div class='recipe'>
				<h1>Oxtail Soup (牛尾汤）</h1>
											
				<p> Ingredients </p>
				<ul>
					<li> Chopped ox tail, whole </li>
					<li> Tomatoes </li> 
					<li> Ginger </li>
					<li> Scallion, salt, white pepper </li>
				</ul> 
				
				<p> Instructions </p> 
				<ol>
					<li> Soak the ox tail in cold water for several hours, so that the water turns pink. Discard water. </li>
					<li> Alternatively, boil the ox tail to get rid of foam. Discard water and clean properly. This may take a while. Do not fret. </li> 
					<li> Fill pot with clean water and begin boiling ox tail. It's alright to start with more water, as the water will slowly boil away. Add quite a bit of sliced ginger to the soup.</li>
					<li> Slice tomatoes and throw into water. Eventually, all the tomatoes will melt into the soup. </li>
					<li> Boil the soup until the meat is ready to fall off the bone. </li> 
					<li> Lots of oil and foam will come on the top. Boil until the soup becomes milky white. This will take several hours. Boil on low heat for the last two hours. </li> 
					<li> Before eating, have freshly chopped scallion, salt, and white pepper on the side. Add to bowl to taste. </li>
				</ol> 
								
				<p> <a href="/food">Back to All Recipes </a> </p>
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>