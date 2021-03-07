<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Chunyang Ding - Photos"; ?>
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
				<h1>Photography</h1>
				<p> Here are some photos that I have taken. Camera: Pixel 4a. </p>
				
				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="/assets/pics/PXL_20201016_233312495.NIGHT.jpg">
							<img src="/assets/pics/PXL_20201016_233312495.NIGHT.jpg" width="1000">
						</a>
					</div>
				</div>

				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="/assets/pics/PXL_20201024_192943957.jpg">
							<img src="/assets/pics/PXL_20201024_192943957.jpg" width="1000">
						</a>
					</div>
				</div>
				
				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="/assets/pics/PXL_20201024_195857705.jpg">
							<img src="/assets/pics/PXL_20201024_195857705.jpg" width="1000">
						</a>
					</div>
				</div>				
				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="/assets/pics/PXL_20201024_201517320.jpg">
							<img src="/assets/pics/PXL_20201024_201517320.jpg" width="1000">
						</a>
					</div>
				</div>
				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="/assets/pics/PXL_20201104_032205167.jpg">
							<img src="/assets/pics/PXL_20201104_032205167.jpg" width="1000">
						</a>
					</div>
				</div>
				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="/assets/pics/PXL_20201128_055752652.jpg">
							<img src="/assets/pics/PXL_20201128_055752652.jpg" width="1000">
						</a>
					</div>
				</div>
				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="/assets/pics/PXL_20201129_215021791.jpg">
							<img src="/assets/pics/PXL_20201129_215021791.jpg" width="1000">
						</a>
					</div>
				</div>
				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="/assets/pics/PXL_20201129_223527337.jpg">
							<img src="/assets/pics/PXL_20201129_223527337.jpg" width="1000">
						</a>
					</div>
				</div>
				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="/assets/pics/PXL_20210216_031539020.jpg">
							<img src="/assets/pics/PXL_20210216_031539020.jpg" width="1000">
						</a>
					</div>
				</div>
				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="/assets/pics/PXL_20210227_194134869-EFFECTS.jpg">
							<img src="/assets/pics/PXL_20210227_194134869-EFFECTS.jpg" width="1000">
						</a>
					</div>
				</div>
				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="/assets/pics/PXL_20210221_152817387.jpg">
							<img src="/assets/pics/PXL_20210221_152817387.jpg" width="1000">
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
				<p> <a href="/photos">Previous collection</a> </p>
				
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>
