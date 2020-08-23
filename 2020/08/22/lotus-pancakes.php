<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Recipe - Lotus Pancakes"; ?>
		<title><?php echo $page_name; ?></title>
		<link rel="stylesheet" type="text/css" href="/css/main.css">
		<link rel="stylesheet" type="text/css" href="/css/dropdown.css">
		<link rel="stylesheet" type="text/css" href="/css/recipes.css">
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class='container'>
			<div class='recipe'>
				<h1>Lotus Pancakes (藕饼）</h1>
											
				<p> Ingredients </p>
				<ul>
					<li> Fresh lotus root. Most are bad at the grocery store. Preferrably, get a lotus root that is not prepacked that you can personally inspect. Fatter pieces are better. </li>
					<li> Meat filling (see here)</li>
					<li> Eggs, salt, flour, water </li>
					<li> Oil for deep frying. </li> 
				</ul> 
				
				<p> Instructions </p> 
				<ol>
					<li> Chop of both ends of the lotus root. Peel off the skin if needed. </li>
					<li> Inspect the holes of the lotus root, to make sure that there is nothing rotting inside it. </li>
					<li> Slice into fairly thin, uniform slices. </li>
					<li> Create the meat filling - <a href="">see here</a>. </li>
					<li> Take a single slice of lotus root, fill with meat filling, and cover with other slice of lotus root. The two slices of lotus should stick together, with a bit of meat coming through the holes of the lotus root. </li> 
					<li> Prepare the frying batter. </li>
					<li> Add a few eggs, and whisk thoroughly. Add a pinch of salt. Add a bit of water, and then add in flour. The thickness of the batter should be enough to coat the lotus pancake when it is dipped in. </li>
					<li> Use a small pan and fill with regular vegetable oil. Bring the oil to temperature, which you can check by putting a bit of batter in and seeing the crispy piece of dough immediately pop up to the top. </li>
					<li> Soak each lotus root in the batter and deep fry. Do not allow the outside of the pancake to get stuck to the bottom of the pan, so that the lotus pancake is one piece, instead of separating into two pieces. </li>
					<li> After the outside batter done but not yet golden crispy, take out each piece and place in a cooling plate. This will be around 2-3 minutes, but depends on size and heat. </li>
					<li> When all of your lotus pancakes are done, fry each one again. The goal here is to get the batter on the outside to be perfectly crispy. Cook on wire rack until ready to serve. </li>
					<li> If you are preparing for freezing or eating later, don't overfry each pancake, as you may want to refry them (or microwave, or bake) in the future. </li>
				</ol> 
								
				<p> <a href="/food">Back to All Recipes </a> </p>
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>