<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Recipe - Carmelized Onions"; ?>
		<title><?php echo $page_name; ?></title>
		<link rel="stylesheet" type="text/css" href="/css/main.css">
		<link rel="stylesheet" type="text/css" href="/css/dropdown.css">
		<link rel="stylesheet" type="text/css" href="/css/recipes.css">
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class='container'>
			<div class='recipe'>
				<h1>Links to other recipes</h1>
				
				<p> Almost all of the recipes that I post on here are a result of me taking some recipe I found online, and adapting it slightly to make it work better for myself. This helps me because I can have a centralized hub for the things that I have had experience in cooking, and I get to skip the long, often-bloated websites from others. However, there are a few recipes that I have no way of improving on, either because the original is already so thorough that I couldn't really replicate it without just copying verbatim, or because of a particularly elegant way of describing the cooking process. For those, I will just provide the links below! </p>

				<ul>
					<li> <a href="https://thewoksoflife.com/chinese-tea-eggs/">Chinese Tea Eggs - Woks of Life </a> </li>
					<li> <a href="https://www.koreanbapsang.com/dweji-bulgogi-korean-spicy-pork-bbq/"> Jeyuk Bokkeum (Spicy Pork BBQ) - Korean Bapsang </a> </li>
					<li> <a href="https://prettysimplesweet.com/lemon-tart/">Lemon Tart - Pretty Simple Sweet </a> </li>
				</ul>
				
				<p> <a href="/food">Back to All Recipes </a> </p>
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>