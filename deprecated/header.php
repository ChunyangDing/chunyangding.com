<!-- Outdated header doc; better to manually include the header on each page (for more customizability) and only include the navbar.php doc instead.  -->
<?php
echo 
'<!DOCTYPE html>
<html>
	<head>
		<title>Chunyang Ding</title>
		<link rel="stylesheet" type="text/css" href="/css/main.css" />
		<link rel="stylesheet" type="text/css" href="/css/dropdown.css" />
	</head>
	
	<body>
	
	<div class="navbar">
  <a href="/">Home</a>
  <div class="dropdown">
    <button class="dropbtn"> About Me &#9660;
    </button>
    <div class="dropdown-content">
			<a href="/about">About</a>
			<a href="/assets/files/DingResume.pdf">CV</a>
			<a href="/assets/files/FailureCV.pdf">Failure CV</a>
		</div>
	</div>

	<div class = "dropdown">
		<button class="dropbtn"> Around the Web &#9660;
		</button>
		<div class="dropdown-content">
			<a href="/pastwork">Past Work</a>
			<a href="/booklist">Book Reviews</a>
		</div>
	</div>

	<div class="dropdown">
		<button class="dropbtn"> Blogs &#9660;
		</button>
		<div class="dropdown-content">
			<a href="/blogHome">Current Blog</a>
			<a href="https://figtwo.wordpress.com">Fig Two (QCJC)</a>
			<a href="http://campuspress.yale.edu/chunyangding/">Campuspress (Yale)</a>
			<a href="https://seattlechunny.wordpress.com">Seattlechunny (HS)</a>
		</div>
	</div>
</div>';

?>