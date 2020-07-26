<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Chunyang Ding - Index"; ?>
		<title><?php echo $page_name; ?></title>
		<link rel="stylesheet" type="text/css" href="/css/main.css">
		<link rel="stylesheet" type="text/css" href="/css/dropdown.css">
		<style>
			/*For formatting the copy email button */
			.emailCopy {
				background-color: #fffff8;
				border: none;
				color: #0000EE;
				padding: 5px 5px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 1.4em;
				border-radius: 0px;
				font-family: "Helvetica", "Arial", "Sans-Serif";
				cursor: pointer;
			}
			</style>
	</head>
	<body>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		
		<div class="container">
			<div class="blurb">
				<h1>Chunny's Okay Website</h1>

				<img src="/assets/pics/YSM_Headshot.jpg" alt="Chunyang Ding" style="width:200px;height:auto;margin:0px 25px" align="left">
				
				<p> Hi, I'm Chunny! Welcome to my slowly improving website. I hope you stick around! </p>
				
				<p> I'm a physicist, a lifelong learner, and have far too many irons in the fire all at once. </p>
				
				<p> If you are more interested in finding my <a href="https://www.linkedin.com/in/chunyangding">LinkedIn</a>, a traditional <a href="/about">about page</a>, or a <a href="/cv">regular CV</a>, those are available as well. In the meantime, do also check out my <a href="/failure_cv">Failure CV</a> to keep my ego sufficiently deflated.</p>
				
				<p> I <a href="/blog">enjoy blogging</a> and wrote some <a href="https://seattlechunny.wordpress.com">very terrible poetry</a> once upon a time, but focus more of my energy writing about <a href="https://figtwo.wordpress.com">quantum computing </a> these days. I am an avid reader, and you can find recent ruminations of some <a href="https://www.goodreads.com/user/show/10726611-chunyang-ding">good reads here.</a> 
				
				<p> I have spent much of my life spewing words all over the internet, and a selection of some of my favorite pieces can be <a href="/pastwork">found here</a>. I also <a href="https://en.wikipedia.org/wiki/User:ChunyangD">edit Wikipedia</a>, <a href="https://www.chess.com/member/chunyangd">play chess</a>, <a href="https://github.com/chunyangding">commit on Github</a>, and <a href="https://www.reddit.com/user/seattlechunny/">read Reddit</a>, although I check those much less frequently. </p>
				
				<p> Feel free to poke around, and drop me a line! </p>
				
				<script src="/assets/copyVal.js"></script> 
				<button class = "emailCopy" onclick="copyVal('me@chunyangding.com')">Contact me: me@chunyangding.com</button> 

			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>
