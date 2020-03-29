<!DOCTYPE html>
<html>
	<head>
		<title> Chunyang Ding</title>
		<link rel="stylesheet" type="text/css" href="/css/main.css">
		<link rel="stylesheet" type="text/css" href="/css/dropdown.css">
		
		<style>
			#toc_container {
					background: #f9f9f9 none repeat scroll 0 0;
					border: 1px solid #aaa;
					display: table;
					font-size: 95%;
					margin-bottom: 1em;
					padding: 20px;
					width: auto;
			}

			.toc_title {
					font-weight: 700;
					text-align: center;
			}

			#toc_container li, #toc_container ul, #toc_container ul li{
					list-style: outside none none !important;
			}
		</style>
	
	</head>
	
	<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class='container'>
			<div class='blurb'>
			
				<div id="toc_container">
					<p class="toc_title">Contents</p>
					<ul class="toc_list">
						<li><a href="#First_Point_Header">1 First Point Header</a>
							<ul>
								<li><a href="#First_Sub_Point_1">1.1 First Sub Point 1</a></li>
								<li><a href="#First_Sub_Point_2">1.2 First Sub Point 2</a></li>
							</ul>
						</li>
						<li><a href="#Second_Point_Header">2 Second Point Header</a></li>
						<li><a href="#Third_Point_Header">3 Third Point Header</a></li>
					</ul>
				</div>
				
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>