<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Chunyang Ding - Blog"; ?>
		<title><?php echo $page_name; ?></title>
		<link rel="stylesheet" type="text/css" href="/css/main.css">
		<link rel="stylesheet" type="text/css" href="/css/dropdown.css">
	</head>
	<body>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class="container">
			<div class="blurb">
			<h1> Blogroll </h1>
			<p> I've written a lot of words, many of them in the form of a blog. Here are some recent ruminations. </p>
			<p><b>11 Aug 2019 &gt; &gt;</b> <a href="/2019/08/11/DesertSolitaire">Reflections on Desert Solitaire </a></p>
			<p><b>04 Feb 2020 &gt; &gt;</b> <a href="/2020/02/04/2020_plan">A Plan for 2020</a></p>
			<p><b>24 Mar 2020 &gt; &gt;</b> <a href="/2020/03/24/myBlogPt2">Story of My Blog, Pt. 2</a></p> 
			<!--p><b>01 Apr 2020 &gt; &gt;</b> <a href="/2020/04/01/progress-update">Web Design: Complete!</a></p--> 
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>