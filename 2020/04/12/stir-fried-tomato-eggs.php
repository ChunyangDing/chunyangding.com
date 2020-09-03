<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Recipe - Stir Fried Tomatoes and Eggs"; ?>
		<title><?php echo $page_name; ?></title>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php'; ?>
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class='container'>
			<div class='recipe'>
				<h1>Stir Fried Tomatoes and Eggs (番茄炒蛋）</h1>
								
				<p> The classic Chinese dish, good anytime, anywhere. </p> 
				
				<p> Ingredients </p>
				<ul>
					<li> Oil </li>
					<li> Tomatoes </li>
					<li> Eggs </li>
					<li> Green Onion </li>
					<li> Salt </li>
					<li> Sugar </li>
				</ul>
				
				<p> Instructions </p>
				<ol>
					<li> Heat the pan with some oil. As the pan is heating, wash, clean, and slice the tomatoes. I usually cut small tomatoes (egg-sized) into quarters, and larger beefsteaks into eighths. At the same time, chop the green onion. </li>
					<li> When the oil looks shimmery, slide in the tomatoes. I like to leave the tomatoes alone for a while before stirring with a wooden spoon. Sprinkle with salt (2 good handfuls), as well as the whites of the green onion. Turn the heat to medium. </li>
					<li> When the tomatoes are starting to give up their juices, turn the heat to low and cover the pan. Let it continue to simmer. </li>
					<li> While waiting for the tomatoes, crack the eggs. Scramble eggs together in separate bowl, adding a pinch of salt and some leftovr green onion whites. </li>
					<li> Taste the tomatoes and add salt and sugar. When the tomatoes look almost done, cook the scrambled eggs in a separate pan over medium heat. When the eggs are partially solidified, pour the eggs into the tomato mixture to finish cooking. Garnish with the greens of the green onion. </li>
				</ol>
				
				<p> <a href="/food">Back to All Recipes </a> </p>
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>