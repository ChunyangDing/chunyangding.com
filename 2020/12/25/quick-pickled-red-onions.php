<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Recipe - Quick Pickled Red Onions"; ?>
		<title><?php echo $page_name; ?></title>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php'; ?>
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class='container'>
			<div class='recipe'>
				<h1>Quick Pickled Red Onions/Daikon/Carrots</h1>
											
				<p> Ingredients </p>
				<ul>
					<li> 1 part white vinegar (apple cider is also very good)</li>
					<li> 1 part water</li>
					<li> 1 table spoon each of salt and sugar (can also use honey, maple syrup, or any other sweetener)</li>
					<li> Thinly sliced red onions, daikon radish, or carrots </li>
					<li> Large jar - I've found spaghetti sauce jars are especially convenient </li>
				</ul> 
				
				<p> Instructions </p> 
				<ol>
					<li> Slice your vegetables however you want. I usually peel onions, cut in half, and then slice thinly. For carrots and radish, I usually make it into strips by first peeling, then slicing lengthwise. After that, I take each large slice and make it into thin strips. </li>
					<li> In a small saucepan, mix vinegar, water, salt, and sugar. Bring to a gentle boil, just until the salt and sugar fully dissolves. You might want to open windows/turn on the exhaust during this, to prevent your entire house from smelling of vinegar. </li>
					<li> Allow the brine to slightly cool, before pouring over vegetables in the jar. </li>
				</ol> 
								
				<p> <a href="/food">Back to All Recipes </a> </p>
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>