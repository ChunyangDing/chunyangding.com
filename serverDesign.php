<!DOCTYPE html>
<html>
	<head>
		<title> Chunyang Ding</title>
		<link rel="stylesheet" type="text/css" href="/css/main.css">
		<link rel="stylesheet" type="text/css" href="/css/dropdown.css">
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
	
		<div class='container'>
			<div class='blurb'>
				<h1>Server Design</h1>
				<p> Part of what I had wanted to accomplish in designing this website was learning how to use my own server for hosting. I have serious reservations about using large, complex software-as-a-service subscriptions for hosting things that would hopefully live semi-permanently, and it didn't seem like too much of a challenge to learn the basics. I followed several web tutorials to set up a pure Linux box, which is what is currently serving you this page! While setting things up, I kept a careful record of all of the commands I sent the server, so that I could fix an mistakes as needed. So far, things look okay, so I'm going to post what I did here, to hopefully act as a simple guide for setting up your own server. </p> 
				
				<p> Overall, this website is made with just html/css/php, without much fancy addons (ie, javascript, html5, or any other content management system (CMS) ). Since the primary purpose of the website is to just deliver text, I figured that a maximally simple and lightweight design would probably be optimal. </p>
				
				<p> All of the website is hosted on a desktop running Ubuntu 18.04, which is also running Apache, MySQL, and PhP - the conventional LAMP server. That is directly connected to my home router, connected by a static internal IP with port 443 (http) open to the public, which is then mapped onto my domain name <a href="chunyangding.com">chunyangding.com</a>). When I move, I would have to remap the public IP address of the router to my website domain name once more. </p>
				
				<p> The code for this website is edited in Notepad++ on my main laptop. I then commit all of the changes to Git, which through <a href="github.com/chunyangding/chunyangding.com"> Github</a>, is then pushed to the live website. Therefore, my <code>dev</code> workspace is local on my laptop, while <code>prod</code> is on the desktop that is permanently on and permanently connected to the web. </p> 
				
				<p> Before I had Github setup, I was directly SSHing onto my server, using PuTTY for server commands and WinSCP for copying and editing files live on prod. For obvious reasons, live editing on prod is generally discouraged, even if it is a product that isn't really used! Just to get into the right mindset for things, I decided to transition to the Github model, although I imagine that quick changes would probably still go through the WinSCP route. </p> 
				
				<p> The main downside of doing things through Github is that it is fairly roundabout. To start, I don't have Apache installed on my local windows machine, so I am unable to preview pages. Then, to push something to the server, I first need to switch to Github desktop, add the changed files to my commit, push to origin, then switch over to PuTTY and git pull to update the documents. This seems like a lot of extra work, especially for something that used to be live. However, I think this still makes sense for the long term maintenance of the website - ie, when the website has reached some sort of steady-state where I am no longer making dramatic changes, and only updating blog posts. Then, Github would be able to easily track changes, and revert back to older versions if needed. </p> 
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	
	</body>
</html>
	
	
	