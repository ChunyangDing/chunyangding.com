<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Recipe - Honey Soy Ginger Salmon"; ?>
		<title><?php echo $page_name; ?></title>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php'; ?>
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class='container'>
			<div class='recipe'>
				<h1>Honey Soy Salmon</h1>
								
				<p> An easy salmon dish! This is one of my two go-to dishes if I have a large (> 2lb) piece of salmon. I usually cook it with the skin on, allowing the skin to get slightly crispy. This is the baked version, although the same is more or less applicable if you have smaller pieces and want to pan sear it instead. </p> 
				
				<p> Ingredients </p>
				<ul>
					<li> Salmon (fresh) </li>
					<li> Soy Sauce </li>
					<li> Honey </li>
					<li> Fresh lemon juice </li>
					<li> Rice vinegar </li>
					<li> Ginger, a fairly large chunk (Ginger paste will work in a pinch) </li>
					<li> 3 - 4 cloves of garlic </li>
					<li> Green onion (garnish) </li>
					<li> Sesame seeds </li>
				</ul>
				
				<p> Instructions </p>
				<ol>
					<li> Preheat the oven to 350 degrees F. </li>
					<li> Rinse off the salmon, and rub with a bit of salt. Prepare your baking tray, lined with aluminum foil. </li>
					<li> Prepare the marinade. Chop up the ginger, garlic, and the whites of the green onion very finely. Mix together the soy sauce and honey in a roughly 3:1 ratio. Mix with a few teaspoons of lemon juice and/or rice vinegar, to provide a bit of acidic bite and freshness while also helping to dissolve the honey. Combine all of these together.</li>
					<li> Brush the marinade over the salmon. Sprinkle sesame seeds and greens of green onion over the top. If I have some extra butter around, I like to cut small squares and put them underneathe the skin, encouraging the skin to become crispier. </li>
					<li> Bake salmon for ~20 minutes, with covered aluminum foil. Check to see that the flesh of the salmon has turned from translucent to opaque. </li>
					<li> Uncover aluminum foil and turn oven up to 400 degrees F. Put on remaining amount of sesame seeds, green onion, and drizzle with honey. Bake for another 5-10 mins, until the top of the salmon is slightly crispy. </li>
				</ol>
				
				<p> <a href="/food">Back to All Recipes </a> </p>
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>