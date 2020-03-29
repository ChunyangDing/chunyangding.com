<!DOCTYPE html>
<html>
	<head>
		<title> Chunyang Ding</title>
		<link rel="stylesheet" type="text/css" href="/css/main.css">
		<link rel="stylesheet" type="text/css" href="/css/dropdown.css">
		<link rel="stylesheet" type="text/css" href="/css/toc.css">
		<style>

		</style>
	
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class='container'>
			<div class='blurb'>
				<h1> Table of Contents Test </h1>
				<p> Dummy text goes here </p>
				<div id="toc">
					<p class="toc_title">Contents</p>
					<ul>
						<li>1 <a href="#First_Point_Header">First Point Header</a>
							<ul>
								<li>1.1 <a href="#First_Sub_Point_1">First Sub Point 1</a>
								</li>
								<li>1.2  <a href="#First_Sub_Point_2">First Sub Point 2</a></li>
							</ul>
						</li>
						<li>2 <a href="#Second_Point_Header">Second Point Header</a></li>
						<li>3 <a href="#Third_Point_Header">Third Point Header</a></li>
					</ul>
				</div>
				
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>