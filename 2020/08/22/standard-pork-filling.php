<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Recipe - Standard Pork Filling"; ?>
		<title><?php echo $page_name; ?></title>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php'; ?>
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class='container'>
			<div class='recipe'>
				<h1>Standard Pork Filling (猪肉馅）</h1>
				
				<p> This is a standard filling to put in wontons, potstickers, lotus pancakes, meatballs etc. </p>
											
				<p> Ingredients </p>
				<ul>
					<li> Fresh ground pork. 1 pound is usually enough. Medium fatty pork is typically okay. It's better to pick your own pork to be ground, if possible. </li>
					<li> Rice wine </li>
					<li> Scallion, ginger </li>
					<li> Light soy sauce, salt, sugar </li>
					<li> White pepper (optional), cornstarch (optional) </li>
				</ul> 
				
				<p> Instructions </p> 
				<ol>
					<li> Dice ginger and chop scallions. </li>
					<li> Place ground pork in a large bowl or small pot. Add water and rice wine, and using chopsticks, stir the ground pork to make it more chewy. </li>
					<li> Add salt, sugar, light soy sauce, ginger, scallion, white pepper (optional) as you are mixing. </li>
					<li> Do not overadd flavorings, because you can cook samples of the filling as you go and adjust taste. </li> 
					<li> The key is to have the right amount of water in the filling, which is probably more than you think. </li> 
					<li> You can add an egg or starch water into the filling as well. You need quite a bit of water. In the end, you should not be able to see any liquid remaining. </li> 
					<li> Use in any of the aforementioned dishes. </li> 
				</ol> 
								
				<p> <a href="/food">Back to All Recipes </a> </p>
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>