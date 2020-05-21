<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Recipe - Chickpeak Tomato Salad"; ?>
		<title><?php echo $page_name; ?></title>
		<link rel="stylesheet" type="text/css" href="/css/main.css">
		<link rel="stylesheet" type="text/css" href="/css/dropdown.css">
		<link rel="stylesheet" type="text/css" href="/css/recipes.css">
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class='container'>
			<div class='recipe'>
				<h1>Chickpea Tomato Salad</h1>
				
				<p> This is a great way to toss together a vegan salad at a moment's notice. It tastes great and feels very filling! </p>
				
				<p> Ingredients </p>
				<ul>
					<li> Can of chickpeaks </li>
					<li> Cherry tomatoes </li>
					<li> Olive oil </li>
					<li> Balsimic vinegar </li>
					<li> Seasonings - Salt, pepper, cumin, cayenne powder, red pepper flakes, thyme </li>
				</p>
				
				<p> Instructions </p> 
				<ol>
					<li> Warm up pan with a bit of oil on the base. Drain the can of chickpeas and pour it into the pan. Season with salt, pepper, and primarily cumin, although feel free to add any other spices in your cabinet to your own taste. </li>
					<li> I think it is a good idea to cover the pot as you do this, as the chickpeas will pop a bit with the water inside them. Stir occasionally, but you want them to become nice and browned. While the chickpeas are cooking, slice your cherry tomatoes in half and place in your serving bowl. </li>
					<li> After the chickpeas are done (~10 mins), pour them in with the rest of your cherry tomatoes. Drizzle olive oil and balsimic vinegar on top. I think it is nice to dice some shallots and add some lemon juice on top as well, and parsley will make it look nicer! </li>
				</ol> 
				
				<p> <a href="/food">Back to All Recipes </a> </p>
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>