<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "USPS"; ?>
		<title><?php echo $page_name; ?></title>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php'; ?>
	</head>
	<body>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class="container">
			<div class="blurb">
				<h1>Temporary holding page for USPS Info</h1>
				<p> <a href="https://docs.google.com/document/d/17rGAFYIkbQ1pdHEtDWBf_9TSAsV8pEzORGJCv3XIGlY/edit#">Link to Google Doc if you would like to contribute </a> </p>
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>