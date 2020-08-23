<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Recipe - Xiancai Douban Su"; ?>
		<title><?php echo $page_name; ?></title>
		<link rel="stylesheet" type="text/css" href="/css/main.css">
		<link rel="stylesheet" type="text/css" href="/css/dropdown.css">
		<link rel="stylesheet" type="text/css" href="/css/recipes.css">
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class='container'>
			<div class='recipe'>
				<h1>Pickled Vegetables with Broad Beans (咸菜豆瓣酥）</h1>
											
				<p> Ingredients </p>
				<ul>
					<li> Frozen broad beans (no shells) </li>
					<li> (as fresh as possible) pickled vegetables - optimally, 雪里红</li>
					<li> Oil, salt, sugar </li>
				</ul> 
				
				<p> Instructions </p> 
				<ol>
					<li> Slightly thaw out the broad beans. </li> 
					<li> Add a little bit of oil to a pan. Gently fry the broad beans in the pan. </li>
					<li> Add water to the pan to cook the beans until fully soft. </li>
					<li> Using a wooden spoon, crush the beans until into a chunky paste. </li>
					<li> Taste your pickled vegetables, and wash/cut if needed. Depending on how salty the vegetables are, add the pickled vegetables to your preference. Start with a little bit and slowly add in. </li>
					<li> Add a bit more water so that nothing burns/gets too dried. Turn down to low heat. </li>
					<li> Add salt and sugar to taste. Adding sugar is very important to make sure that the saltiness comes out. </li>
					<li> Mix and cook until water is gone. </li> 
				</ol> 
								
				<p> <a href="/food">Back to All Recipes </a> </p>
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>