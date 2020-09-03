<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Recipe - Smashed Cucumbers"; ?>
		<title><?php echo $page_name; ?></title>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php'; ?>
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class='container'>
			<div class='recipe'>
				<h1>Smashed Cucumbers</h1>
								
				<p> A refreshing side dish, especially during the warmer months. Super easy to put together, and incredibly refreshing. </p> 
				
				<p> Ingredients </p>
				<ul>
					<li> Cucumbers </li>
					<li> Salt </li>
					<li> Rice Vinegar </li>
					<li> Garlic </li>
					<li> Sugar </li>
					<li> Sesame Seeds (optional, for topping) </li>
				</ul>
				
				<p> Instructions </p>
				<ol>
					<li> Slice the cucumbers. You can either cut off big chunks and then use a spoon to actually smash it (works better for larger cucumbers), or take a sharp knife and make slices thin enough to be translucent. </li>
					<li> Sprinkle some salt on your cucumbers. Allow it to rest. </li>
					<li> While allowing the cucumbers to soak in some salt, chop up a few cloves of garlic. Mince finely, and don't be afraid of using quite a few cloves. </li>
					<li> Rinse off the salt on the cucumbers. Add in enough rice vinegar to almost cover the cucumbers, and then sprinkle sugar on top to taste. Top with sesame seeds to look fancier if desired. </li>
				</ol>
				
				<p> <a href="/food">Back to All Recipes </a> </p>
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>