<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Recipe - Shi Zi Tou"; ?>
		<title><?php echo $page_name; ?></title>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php'; ?>
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class='container'>
			<div class='recipe'>
				<h1>Lion's Head Meatballs (狮子头)</h1>
											
				<p> Ingredients </p>
				<ul>
					<li> Fatty ground pork - at least 70/30 </li>
					<li> Minced ginger, scallions </li>
					<li> 1 large egg, a few tablespoons of breadcrumbs, cooking wine, light soy sauce, oyster sauce, white pepper, five spice pepper, a teaspoon of cornstarch, quarter cup of water </li>
					<li> Water chestnuts </li>
				</ul> 
				
				<p> Instructions </p> 
				<ol>
					<li> Combine everything except water chestnuts in a mixing bowl. Allow the mixer to run for 10+ minutes - you really want the meat to be really really well mixed. </li>
					<li> Chop up the water chestnuts really finely and add to the meat mixture. Stir for another 5 minutes. </li> 
					<li> Take out the meat mixture and mold into balls. I usually make them about the size of my clasped hands, although I think that the proper way to make them is to be absolutely ginormous. I always get nervous about cooking them thoroughly for large meatballs, so mine are much smaller. </li> 
					<li> Heat oil in a fairly small saucepan to just around 350 degrees F, and put in a few meatballs at a time. It is nice to use a thermometer for this process, to monitor the heat of the oil. The temperature drops a lot when you put in the raw meatballs, so add in small batches. Each meatball only requires maybe 3 minutes of being in the oil - just enough for them to be golden on the outsides. </li>
					<li> After all of the meatballs are thoroughly cooked, go ahead and move to a large wok. You want to add the sauces from earlier - cooking wine, light and dark soy sauce, and maybe a bit of oyster sauce. Add sugar to taste as well - rock sugar is traditional as usual. Be sure to add a lot of water - it will boil off over time. Bring to a boil and simmer for 30-45 minutes. </li> 
					<li> Serve with blanched qingcai and rice. </li> 
				</ol> 
								
				<p> <a href="/food">Back to All Recipes </a> </p>
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>