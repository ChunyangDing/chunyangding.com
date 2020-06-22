<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Recipe - Shanghai Qingcai"; ?>
		<title><?php echo $page_name; ?></title>
		<link rel="stylesheet" type="text/css" href="/css/main.css">
		<link rel="stylesheet" type="text/css" href="/css/dropdown.css">
		<link rel="stylesheet" type="text/css" href="/css/recipes.css">
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class='container'>
			<div class='recipe'>
				<h1>Shanghai Qingcai (上海青菜）</h1>
				
				<p> This is a dish that doesn't really need a recipe, but it is such a classic that I would be wont to not include it.  </p>
							
				<p> Ingredients </p>
				<ul>
					<li> Shanghai Qing Cai/Bok Choi - the best ones are the small tips. These are a bit more pricy compared to the regular bok choi, but they are much more tender and sweet </li>
					<li> Sugar </li>
					<li> Salt </li>
					<li> Chinese sausage (optional) </li> 
				</ul> 
				
				<p> Instructions </p> 
				<ol>
					<li> Chop off the stems and clean the leaves of the qingcai. I usually like to wash each individually, in case there is a bit of grit nesting in the stem portion. I put the leaves in a collander and shake it a few times, just to get out some of the extra water. </li>
					<li> Heat up some vegetable oil in a wok, and throw in the qingcai. There should be rapid sizzling - the leaves are basically mostly water. Sprinkle salt and sugar to taste, and move the qingcai every few minutes, to prevent burning. </li>
					<li> Chop up your Chinese sausage - I usually do not put more than two sausages in per batch. Slice into half inch pieces, and toss in with the rest of the qingcai after the qingcai has started to shrink a bit. </li> 
					<li> Serve hot, and goes well with basically anything. </li> 
				</ol> 
								
				<p> <a href="/food">Back to All Recipes </a> </p>
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>