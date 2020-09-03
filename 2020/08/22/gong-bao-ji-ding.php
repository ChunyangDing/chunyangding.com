<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Recipe - Gong Bao Ji Ding"; ?>
		<title><?php echo $page_name; ?></title>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php'; ?>
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class='container'>
			<div class='recipe'>
				<h1>Gongbao Chicken (宫保鸡丁）</h1>
				
				<p> This is a nice winter food to prepare in advance. You can make a lot of the fried peanuts. </p> 
											
				<p> Ingredients </p>
				<ul>
					<li> Chicken breasts </li> 
					<li> Dried tofu </li> 
					<li> Peanuts </li> 
					<li> Broad bean chili sauce (豆瓣酱) </li> 
					<li> Tianmiang sauce (甜面酱) </li> 
					<li> Cooking wine, tapioca flour </li> 
				</ul> 
				
				<p> Instructions </p> 
				<ol>
					<li> Chop the chicken breasts and tofu into small cubes </li> 
					<li> Fry the peanuts gently over oil. Be very careful to not allow the peanuts to get burnt. </li> 
					<li> Marinade chicken cubes with cooking wine, tapioca flour, and set aside. </li>
					<li> Stir-fry the chicken breasts until brown and tender. </li> 
					<li> Add in dried tofu cubes and cook until tender. </li> 
					<li> Add in water, 豆瓣酱 and 甜面酱 until it is at taste. </li> 
					<li> When serving, toss in fried peanuts. </li> 
				</ol> 
								
				<p> <a href="/food">Back to All Recipes </a> </p>
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>