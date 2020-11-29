<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Chunyang Ding - Physics References"; ?>
		<title><?php echo $page_name; ?></title>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php'; ?>
		<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
		<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
	</head>
	<body>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		
		<div class="container">
			<div class="blurb">
				<h1>Useful physics/math references</h1>
				
				<h2> Trig Identities </h2>
				
				<h2> Hyperbolic Trig Identities </h2>
				
				<h2> Commutator Identities </h2>
				
				<h2> Coordinate Transformations </h2>
				
				<h2> Approximations </h2>
				<p> \( \sqrt{1 + x} \approx 1 - \frac{x}{2} + \frac{x^2}{8} - ... \) </p> 


			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>
