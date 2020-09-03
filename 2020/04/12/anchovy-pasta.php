<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Recipe - Anchovy Pasta"; ?>
		<title><?php echo $page_name; ?></title>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php'; ?>
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class='container'>
			<div class='recipe'>
				<h1>Anchovy pasta</h1>
								
				<p> This recipe is a variant of the <a href="https://cooking.nytimes.com/recipes/12168-midnight-pasta-with-garlic-anchovy-capers-and-red-pepper"!>NYTimes' "Midnight Pasta"</a>, crossed with Cong you mian (葱油面). </p> 
				
				<p> Ingredients </p>
				<ul>
					<li> Spaghetti </li>
					<li> Salt </li>
					<li> Olive Oil </li>
					<li> Garlic </li>
					<li> Anchovies </li>
					<li> Red Pepper Flakes </li>
					<li> Green Onion </li>
					<li> Spaghetti </li>
					<li> Freshly Ground Black Pepper </li>
					<li> Parmesan Cheese (optional) </li>
				</ul>
				
				<p> Instructions </p>
				<ol>
					<li> Salt the pot and bring spaghetti to a boil. </li>
					<li> Pour olive oil into a pan over medium heat. When shimmering, add in diced garlic. Cook for a few minutes, and then add in the anchovies. </li>
					<li> To the sauce mixture, add in the green onion and pepper flakes. Taste a tiny bit (careful, the oil is hot) and adjust as needed. </li>
					<li> When spaghetti is <em> al dente</em> (taste to test!), strain. Mix into the pan with the sauce, and gently toss until noodles are covered with the sauce mixture.  </li>
					<li> Top with black pepper and parmesan cheese as desired. </li>
				</ol>
				
				<p> <a href="/food">Back to All Recipes </a> </p>
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>