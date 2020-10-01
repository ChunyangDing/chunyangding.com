<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Music - To Make You Feel My Love"; ?>
		<title><?php echo $page_name; ?></title>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php'; ?>
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class='container'>
			<div class='blurb'>
				<h1>To Make You Feel My Love</h1>
				<p>The chords are taken from the Adele version, although I really hope to at some point learn how to do the tabs from the <a href="https://www.youtube.com/watch?v=8jY6mFKQQCU">Mick McAuley /& Winifred Horan</a></p>
				
				<p> Recorded 30	Sept 2020 </p>
				
				<video width="480" height=auto controls>
					<source src="/assets/vids/20200930_ToMakeYouFeelMyLove.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video> 
				
				<p> <a href="/assets/files/to-make-you-feel-my-love.txt" download> Chord sheet download here </a> </p> 


			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>