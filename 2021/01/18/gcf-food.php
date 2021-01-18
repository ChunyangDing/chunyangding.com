<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Recipe - GCF Food"; ?>
		<title><?php echo $page_name; ?></title>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php'; ?>
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class='container'>
			<div class='recipe'>
				<h1>GCF Food</h1>
				
				<p> To welcome in the new year, we at GCF decided to do a daily potluck, delivering food to one another! Here are the recipes that we prepared. </p> 
				
				<p> Chunyang: Chess pie and cherry turnovers </p> 
											
				<p> Ingredients </p>
				<ul>
					<li> Ingredient goes here</li> 
				</ul> 
				
				<p> Instructions </p> 
				<ol>
					<li> Instruction goes here </li> 
				</ol> 

				<p> Carolyn and Caroline: Ginger molassess cookies, honey-coated almonds, and Japanese sweet potatoes </p> 
				
				<p> Brian: Chocolate cookies, three ways! </p> 
				<p> Andrew and Phillip: Hand-made noodles </p> 
				<p> Adam: Lemon cookies with orange-zest icing </p>
				<p> Caitlin and John: Green onion biscuit and green tea brownie </p> 
								
				<p> <a href="/food">Back to All Recipes </a> </p>
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>