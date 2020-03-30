<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Chunyang Ding - Index"; ?>
		<title><?php echo $page_name; ?></title>
		<link rel="stylesheet" type="text/css" href="/css/main.css">
		<link rel="stylesheet" type="text/css" href="/css/dropdown.css">
	</head>
	<body>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		
		<div class="container">
			<div class="blurb">
				<h1>Chunny's Terrible Website</h1>
				
				<p> Hi, I'm Chunny! Welcome to my poorly made website. I hope you stick around! </p>
				
				<p> I'm a physicist, a lifelong learner, and have far too many irons in the fire all at once. </p>
				
				<p> If you are more interested in finding my <a href="https://www.linkedin.com/in/chunyangding">LinkedIn</a>, a traditional <a href="/about">about page</a>, or a <a href="/cv">regular CV</a>, those are available as well. In the meantime, do also check out my <a href="/failure_cv">Failure CV</a> to keep my ego sufficiently deflated.</p>
				
				<p> I have written some <a href="https://seattlechunny.wordpress.com">very terrible poetry</a> once upon a time, but focus more of my energy writing about <a href="https://figtwo.wordpress.com">quantum computing </a> these days. I am an avid reader, and you can find recent ruminations of some <a href="https://www.goodreads.com/user/show/10726611-chunyang-ding">good reads here.</a> 
				
				<p> I have spent much of my life spewing words all over the internet, and a selection of some of my favorite pieces can be <a href="/aroundtheweb">found here</a>. I also <a href="https://en.wikipedia.org/wiki/User:ChunyangD">edit Wikipedia</a>, <a href="https://github.com/chunyangding">commit on Github</a>, and have a <a href="https://www.reddit.com/user/seattlechunny/">Reddit account</a>, although those are checked a bit less frequently. </p>
				
				
				<img src="/assets/pics/YSM_Headshot.jpg" alt="Chunyang Ding" style="width:400px;height:auto;" class="center">
				
				<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
					$access_number = visitor($page_name); ?>
				<?php echo "<p> Page Hits: ", $access_number, "</p>"; ?>
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>
