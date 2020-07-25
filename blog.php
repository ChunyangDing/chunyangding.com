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
			<p><b>11 Aug 2019 &gt; &gt;</b> <a href="/2019/08/11/desert-solitaire">Reflections on Desert Solitaire </a></p>
			<p><b>04 Feb 2020 &gt; &gt;</b> <a href="/2020/02/04/2020-plan">A Plan for 2020</a></p>
			<p><b>24 Mar 2020 &gt; &gt;</b> <a href="/2020/03/24/my-blog-pt-2">Story of My Blog, Pt. 2</a></p> 
			<p><b>23 Apr 2020 &gt; &gt;</b> <a href="/2020/04/23/optimal-goodreads">Why Goodreads is my Optimal Social Media Platform</a></p> 
			<p><b>01 May 2020 &gt; &gt;</b> <a href="/2020/05/01/the-four-cs">The Four Cs</a></p> 
			<p><b>24 Jul 2020 &gt; &gt;</b> <a href="/2020/07/24/stranger-in-a-strange-land">Stranger in a Strange Land</a></p> 
			<!--p><b>01 Apr 2020 &gt; &gt;</b> <a href="/2020/04/01/progress-update">Web Design: Complete!</a></p--> 
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>