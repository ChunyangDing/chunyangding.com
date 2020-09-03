<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Recipe - Pickled Fish Slices"; ?>
		<title><?php echo $page_name; ?></title>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php'; ?>
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class='container'>
			<div class='recipe'>
				<h1>Pickled Fish Slices</h1>
											
				<p> Ingredients </p>
				<ul>
					<li> Frozen tilapia </li>
					<li> Chinese pickle sauce </li> 
					<li> Tapioca flour </li> 
					<li> Salt, cooking wine, garlic </li>
				</ul> 
				
				<p> Instructions </p> 
				<ol>
					<li> Thaw the frozen tilapia in water. After thawed, slice the whole fish into about 4-5 slices. </li>
					<li> Drizzle salt and cooking wine over each piece, and coat with tapioca flour. </li>
					<li> Heat pan with oil. Lightly fry the fish pieces on both sides. </li>
					<li> Add pickle sauce and crushed garlic to the pan to taste. </li>
				</ol> 
								
				<p> <a href="/food">Back to All Recipes </a> </p>
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>