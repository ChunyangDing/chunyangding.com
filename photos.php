<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Chunyang Ding - Photos"; ?>
		<title><?php echo $page_name; ?></title>
		<link rel="stylesheet" type="text/css" href="/css/main.css">
		<link rel="stylesheet" type="text/css" href="/css/dropdown.css">
		
		<style>
			div.gallery {
				border: 1px solid #ccc;
			}

			div.gallery:hover {
				border: 1px solid #777;
			}

			div.gallery img {
				width: 100%;
				height: auto;
			}

			div.desc {
				padding: 15px;
				text-align: center;
			}

			* {
				box-sizing: border-box;
			}

			.responsive {
				padding: 0 6px;
				float: left;
				width: 49.99999%;
			}

			@media only screen and (max-width: 700px) {
				.responsive {
					width: 99.99999%;
					margin: 6px 0;
				}
			}

			@media only screen and (max-width: 500px) {
				.responsive {
					width: 100%;
				}
			}

			.clearfix:after {
				content: "";
				display: table;
				clear: both;
			}
			</style>
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class='container'>
			<div class='blurb'>
				<h1>Photography</h1>
				<p> Here are some photos that I have taken. Camera: Blackberry KeyOne. </p>
				
				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="/assets/pics/IMG_20191207_1622475.jpg">
							<img src="/assets/pics/IMG_20191207_1622475.jpg" width="1000">
						</a>
					</div>
				</div>


				<div class="responsive"> <!--Probably replace this one? -->
					<div class="gallery">
						<a target="_blank" href="/assets/pics/IMG_20191219_1327332.jpg">
							<img src="/assets/pics/IMG_20191219_1327332.jpg" width="1000">
						</a>
					</div>
				</div>

				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="/assets/pics/IMG_20191225_0000000.jpg">
							<img src="/assets/pics/IMG_20191225_0000000.jpg" width="1000">
						</a>
					</div>
				</div>
				
				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="/assets/pics/IMG_20200126_1826103-EFFECTS.jpg">
							<img src="/assets/pics/IMG_20200126_1826103-EFFECTS.jpg" width="1000">
						</a>
					</div>
				</div>
				
				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="/assets/pics/IMG_20191231_1102414.jpg">
							<img src="/assets/pics/IMG_20191231_1102414.jpg" width="1000">
						</a>
					</div>
				</div>
				
				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="/assets/pics/IMG_20191231_1121568.jpg">
							<img src="/assets/pics/IMG_20191231_1121568.jpg" width="1000">
						</a>
					</div>
				</div>
				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="/assets/pics/IMG_20200223_1701308.jpg">
							<img src="/assets/pics/IMG_20200223_1701308.jpg" width="1000">
						</a>
					</div>
				</div>
				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="/assets/pics/IMG_20200319_EFFECTS.jpg">
							<img src="/assets/pics/IMG_20200319_EFFECTS.jpg" width="1000">
						</a>
					</div>
				</div>
				
				<!-- photo template
				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="img_mountains.jpg">
							<img src="img_mountains.jpg" width="1000">
						</a>
					</div>
				</div>
				-->
				<p> Hope you enjoy! </p>
				
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>
