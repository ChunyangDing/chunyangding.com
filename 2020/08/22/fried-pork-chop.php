<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Recipe - Fried Pork Chop"; ?>
		<title><?php echo $page_name; ?></title>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php'; ?>
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class='container'>
			<div class='recipe'>
				<h1>Fried Pork Chop</h1>
											
				<p> Ingredients </p>
				<ul>
					<li> Costco pork chop, with bone. </li>
					<li> Salt, rice wine, tapioca flour, egg, oil </li>
					<li> Shanghai La Jiang You (Spicy Soy Sauce) </li>
				</ul> 
				
				<p> Instructions </p> 
				<ol>
					<li> Place pork chop on cutting board, and use the back of a meat cleaver to hit the pork chop until the pork chop becomes flattened. </li>
					<li> Add salt, rice wine over the pork chop. </li>
					<li> Coat with tapioca flour and an egg. </li>
					<li> Deep fry pork chop until golden yellow on all sides. When frying, there might be blood coming out of the bone, this is normal. Fry until completely clear, and serve hot. </li> 
					<li> Serve with the Shanghai Spicy Soy Sauce as a dipping sauce. </li> 
				</ol> 
								
				<p> <a href="/food">Back to All Recipes </a> </p>
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>