<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Recipe - Potato Salad"; ?>
		<title><?php echo $page_name; ?></title>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php'; ?>
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class='container'>
			<div class='recipe'>
				<h1>Potato Salad</h1>
												
				<p> Ingredients </p>
				<ul>
					<li> Several pounds of potatoes </li>
					<li> 1 onion </li>
					<li> A few stalks of celery </li>
					<li> 4-5 hard boiled eggs </li>
				</ul>
				
				<p> Sauce Ingredients </p>
				<ul>
					<li> Mayo (2-3 cups) </li>
					<li> 1-3 tbsp mustard </li>
					<li> 1-3 tbsp dijon mustard </li>
					<li> 1-3 tbsp sweet relish </li>
					<li> 2 tbsp apple cider vinegar </li>
					<li> Smoked paprika </li>
					<li> Salt, pepper to taste </li>
				</ul>
				
				<p> Instructions </p>
				<ol>
					<li> Chop potatoes into quarters and boil in cold water. I scrub the potatoes and leave the skins on, but if you don't like skins, I have heard that peeling them after boiling is much easier. </li>
					<li> Boil the eggs for about 10 minutes. Put in cold water and peel, chop. </li>
					<li> Prepare the celery and onion by finely chopping and placing in a large mixing bowl. </li>
					<li> Prepare the sauce by mixing together all of the sauce ingredients together in a medium sized bowl. Adjust to taste. </li>
					<li> When the potatoes are done, drain and pour some additional vinegar over them, giving them a bit more tang. The potatoes should be starting to fall apart with a fork, but not completely mushy. </li> 
					<li> Mix all ingredients together and adjust to taste. I found that I needed more black pepper and salt after mixing together with the potatoes. Enjoy! </li> 
				</ol>
				
				<p> <a href="/food">Back to All Recipes </a> </p>
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>