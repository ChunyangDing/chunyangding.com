<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Chunyang Ding - Zelda"; ?>
		<title><?php echo $page_name; ?></title>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php'; ?>
		
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
				<h1>Zelda</h1>
				<p> We &<3 Zelda! </p>
											
				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="/assets/pics/Zelda/zelda_0005.jpg">
							<img src="/assets/pics/Zelda/zelda_0005.jpg" width="1000">
						</a>
					</div>
				</div>
				
				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="/assets/pics/Zelda/zelda_0006.jpg">
							<img src="/assets/pics/Zelda/zelda_0006.jpg" width="1000">
						</a>
					</div>
				</div>
				
				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="/assets/pics/Zelda/zelda_0007.jpg">
							<img src="/assets/pics/Zelda/zelda_0007.jpg" width="1000">
						</a>
					</div>
				</div>
				
				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="/assets/pics/Zelda/zelda_0008.jpg">
							<img src="/assets/pics/Zelda/zelda_0008.jpg" width="1000">
						</a>
					</div>
				</div>
				
				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="/assets/pics/Zelda/zelda_0011.jpg">
							<img src="/assets/pics/Zelda/zelda_0011.jpg" width="1000">
						</a>
					</div>
				</div>
				
				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="/assets/pics/Zelda/zelda_0012.jpg">
							<img src="/assets/pics/Zelda/zelda_0012.jpg" width="1000">
						</a>
					</div>
				</div>
				
				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="/assets/pics/Zelda/zelda_0013.jpg">
							<img src="/assets/pics/Zelda/zelda_0013.jpg" width="1000">
						</a>
					</div>
				</div>
				
				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="/assets/pics/Zelda/zelda_0014.jpg">
							<img src="/assets/pics/Zelda/zelda_0014.jpg" width="1000">
						</a>
					</div>
				</div>
				
				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="/assets/pics/Zelda/zelda_0015.jpg">
							<img src="/assets/pics/Zelda/zelda_0015.jpg" width="1000">
						</a>
					</div>
				</div>
				
				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="/assets/pics/Zelda/zelda_0016.jpg">
							<img src="/assets/pics/Zelda/zelda_0016.jpg" width="1000">
						</a>
					</div>
				</div>
				
				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="/assets/pics/Zelda/zelda_0017.jpg">
							<img src="/assets/pics/Zelda/zelda_0017.jpg" width="1000">
						</a>
					</div>
				</div>
				
				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="/assets/pics/Zelda/zelda_0018.jpg">
							<img src="/assets/pics/Zelda/zelda_0018.jpg" width="1000">
						</a>
					</div>
				</div>
				
				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="/assets/pics/Zelda/zelda_0019.jpg">
							<img src="/assets/pics/Zelda/zelda_0019.jpg" width="1000">
						</a>
					</div>
				</div>
				
				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="/assets/pics/Zelda/zelda_0001.jpg">
							<img src="/assets/pics/Zelda/zelda_0001.jpg" height="520">
						</a>
					</div>
				</div>
				
				
				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="/assets/pics/Zelda/zelda_0020.jpg">
							<img src="/assets/pics/Zelda/zelda_0020.jpg" width="1000">
						</a>
					</div>
				</div>

			</div>
		</div>
				
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>
