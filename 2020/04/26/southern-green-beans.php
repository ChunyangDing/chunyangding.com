<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Recipe - Southern Green Beans"; ?>
		<title><?php echo $page_name; ?></title>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php'; ?>
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class='container'>
			<div class='recipe'>
				<h1>Southern Grean Beans</h1>
								
				<p> I don't really know why I'm so attracted to southern cooking. Most of my exposure to it, while living in Knoxville, Tennessee, comes from eating school lunches. But there is something about the <em>idea</em> of a good, slow-cooked, Southern meal that makes me break out the butter and bacon. </p> 
				
				<p> Ingredients </p>
				<ul>
					<li> 2 cans of green beans </li>
					<li> Onion </li>
					<li> Bacon, preferrably thick-cut </li>
					<li> Butter </li>
					<li> A few cloves of garlic </li>
					<li> Salt, pepper, chicken boullion </li>
				</ul>
				
				<p> Instructions </p>
				<ol>
					<li> Fry up the bacon over low heat in a small pan to rend as much fat as possible. Use medium heat initially, and turn down to low to prevent burning the bacon. A few slices would do nicely. Drain the bacon fat (and possibly save for other recipes), and let the bacon cool. </li>
					<li> Chop up a few onions and fry in the same pan. Put in some butter, if there is not enough bacon fat for the amount of onions you are using. Throw in some minced garlic after the onions are translucent, and cook until onions are soft. </li>
					<li> Transfer the onion/garlic mixture to a larger pan, and pour in the canned green beans. Pour two cups of water over it, and add in salt, pepper, and chicken boullion to taste. Chop up bacon and stir in as well. </li>
					<li> Bring mixture to a low boil, and then turn down the heat to let simmer for 20-25 mins, until the green beans are almost falling apart. </li>
				</ol>
				
				<p> <a href="/food">Back to All Recipes </a> </p>
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>