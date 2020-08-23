<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Recipe - Stir Fried Tofu Pork"; ?>
		<title><?php echo $page_name; ?></title>
		<link rel="stylesheet" type="text/css" href="/css/main.css">
		<link rel="stylesheet" type="text/css" href="/css/dropdown.css">
		<link rel="stylesheet" type="text/css" href="/css/recipes.css">
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class='container'>
			<div class='recipe'>
				<h1>Stir Fried Tofu and Pork （青椒豆干丝）</h1>
											
				<p> Ingredients </p>
				<ul>
					<li> Dried tofu curd, spiced or not spiced. </li>
					<li> Bell pepper </li>
					<li> Slightly spicy peppers </li> 
					<li> Pork tenderloin </li>
					<li> Cooking wine, tapioca flour, salt, sugar </li> 
				</ul> 
				
				<p> Instructions </p> 
				<ol>
					<li> Slice everything into slices. </li>
					<li> Slightly marinade strips pork tenderloin with cooking wine, tapioca flour </li>
					<li> Stir-fry the pork slices on high heat with a bit of salt, sugar. </li>
					<li> Remove the pork strips and fry the tofu curd in the same wok (without washing the same wok) </li> 
					<li> Add in strips of bell pepper/other peppers, and add back the fried meat. </li>
				</ol> 
								
				<p> <a href="/food">Back to All Recipes </a> </p>
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>