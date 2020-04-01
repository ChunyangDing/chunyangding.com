<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Chunyang Ding - Links"; ?>
		<title><?php echo $page_name; ?></title>
		<link rel="stylesheet" type="text/css" href="/css/main.css">
		<link rel="stylesheet" type="text/css" href="/css/dropdown.css">
	</head>
	<body>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
			<div class="container">
			<div class="blurb">
				<h1> Links</h1>
				<p> Here are some links to spots on the web that I like - some creative, some silly, and all of them good. Hope you enjoy! </p>

				<p> Articles and comics that I still frequently think about </p>
				<ul>
					<li> <a href="https://www.smbc-comics.com/comic/the-art-cycle">Zach Weinersmith - SMBC - The Art Cycle </a> </li>
					<li> <a href="http://phdcomics.com/comics.php?f=1924">PHD Comics - Academia </a> </li> 
					<li> <a href="https://xkcd.com/1909/">Randall Munroe - XKCD - Digital Resource Lifespan</a> </li>
					<li> <a href="https://www.nytimes.com/2015/10/18/nyregion/dying-alone-in-new-york-city.html">N. R. Kleinfeld - NYT - The Lonely Death of George Bell </a> </li>
					<li> <a href="https://yaledailynews.com/blog/2012/05/27/keegan-the-opposite-of-loneliness/">Marina Keegan - YDN - The Opposite of Loneliness </a> </li>
					<li> <a href="https://www.sbnation.com/a/17776-football">Jon Bois - SB Nation - 17776 </a> </li>
					<li> <a href="https://www.theatlantic.com/technology/archive/2015/10/what-makes-a-volcano-sacred/413203/">Adrienne LaFrance - The Atlantic - What Makes a Volcano Sacred?</a> </li> 
				</ul>
				
				<p> Websites that I <del>ripped off</del> found inspiration in </p>
				<ul>
					<li> <a href="https://colemancollins.com">Coleman Collins</a></li>
					<li> <a href="https://felixtripier.com">Felix Tripier</a></li>
					<li> <a href="https://thewoksoflife.com">The Woks of Life</a></li>
					<li> <a href="https://rohanchandra30.github.io">Rohan Chandra</a></li>
					<li> <a href="https://www.adorasvitak.com">Adora Svitak</a> </li>
					<li> <a href="https://tangsida.com">Sida Tang</a></li>
					<li> <a href="http://p13i.io/">Pramod Kotipalli</a></li>
				</ul>
				<img src="/assets/pics/toonLink.jpg" alt="more links!" style="width:200px;height:auto;" class="center">

			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>