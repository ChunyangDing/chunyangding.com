<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Chunyang Ding - Cooking"; ?>
		<title><?php echo $page_name; ?></title>
		<link rel="stylesheet" type="text/css" href="/css/main.css">
		<link rel="stylesheet" type="text/css" href="/css/dropdown.css">
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class='container'>
			<div class='blurb'>				
				<h1>Cooking</h1>
				<p> I really enjoy cooking, probably because I really love eating. My mom repeatedly refuses to make a cookbook for me, but she does send me pictures of what she makes all the time. I wanted to compile some of the things that I've made, along with some very basic instructions. </p>
				
				<p> Typically when I look at a recipe, I tend to ignore measurements and cooking times. Instead, I just sorta taste it repeatedly while cooking and add until it tastes "right". In that same spirit, I don't think any of these recipes will have measurements or times either! </p>
				
				<p> My favorite cookbook right now is Samin Nosrat's <em> <a href="http://www.saltfatacidheat.com">Salt, Fat, Acid, Heat</a></em>, which really goes into some of the principles of cooking. Check it out! </p>
				
				<h1>Recipes</h1>

				<p> <a href="/2020/03/30/honey-soy-salmon">Honey Soy Salmon</a> </p>
				<p> <a href="/2020/03/30/smashed-cucumbers">Smashed Cucumbers</a></p>
				<p> <a href="/2020/03/31/stir-fried-tomatoes-and-egg">Stir Fried Tomatoes and Egg </a> </p>
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>