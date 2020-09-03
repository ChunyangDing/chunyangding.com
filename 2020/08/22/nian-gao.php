<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Recipe - Nian Gao"; ?>
		<title><?php echo $page_name; ?></title>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php'; ?>
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class='container'>
			<div class='recipe'>
				<h1>Rice Cakes - (年糕）</h1>
											
				<p> Ingredients </p>
				<ul>
					<li> Frozen, sliced rice cakes (from Korean grocery store) </li>
					<li> Pork or beef slices (tenderloin slices) </li> 
					<li> Cabbage, Napa cabbage (大白菜）, Qing cai</li>
					<li> Cooking wine, salt, sugar, water </li>
				</ul> 
				
				<p> Instructions </p> 
				<ol>
					<li> Thaw out rice cakes and begin heating up oil in wok. </li> 
					<li> Start frying meat slices, which should be cut into thin strips. Add cooking wine, salt, sugar. </li>
					<li> If using napa cabbage, cook together with meat. If using cabbage, then remove the meat and stir-fry cabbage alone. Add a bit of salt. </li> 
					<li> Add in the rice cakes and stir-fry over high heat with just a little bit of water added. If there is already liquid from frying the vegetables, then no need to add additional water. </li> 
					<li> Cover the pot and cook until the rice cakes are soft and tender. Serve immediately. </li> 
				</ol> 
								
				<p> <a href="/food">Back to All Recipes </a> </p>
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>