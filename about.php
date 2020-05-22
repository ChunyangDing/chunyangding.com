<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Chunyang Ding - About"; ?>
		<title><?php echo $page_name; ?></title>
		<link rel="stylesheet" type="text/css" href="/css/main.css">
		<link rel="stylesheet" type="text/css" href="/css/dropdown.css">
	</head>
	<body>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class="container">
			<div class="blurb">
				<h1>Bio, short</h1>
				<p>
					Chunyang Ding is a physicist working on novel implementations of quantum computing, 
					currently living in College Park, MD. He graduated from Yale University with a B.S. 
					in Physics (Intensive), and had worked in the labs of Professors 
					<a href="https://qulab.eng.yale.edu/">Michel Devoret</a> (superconducting qubits, microwave resonators), 
					<a href="https://uqm.yale.edu/">Nir Navon</a> (ultracold atoms, MOT for Potassium), and 
					<a href="http://www.astro.yale.edu/mgeha/">Marla Geha</a> (satelite galaxies, statistical analysis). 
					He is currently an associate physicist at <a href="https://ionq.com/">IonQ</a>, a trapped ion quantum 
					computing startup associated with <a href="http://iontrap.umd.edu/">Chris Monroe</a> and 
					<a href="https://mist.pratt.duke.edu/">Jungsang Kim</a>. Besides his passion for quantum computing, 
					Chunny is an <a href="https://www.goodreads.com/user/show/10726611-chunyang-ding">avid reader</a> of sci-fi 
					(among other genres) and is enthusiastic about <a href="/pastwork">scientific communication</a>. 
					He's currently learning how to <a href="/guitar">be bad at more instruments</a>, 
					create <a href="/quine">poorly-designed websites</a>, and <a href ="/food">cooking non-poisonous foods</a>.
				</p>
				
				<!--p>
					Chunyang Ding is a physicist working on novel implementations of quantum computing, 
					currently living in Chicago, IL. He is currently a 
					
					He graduated from Yale University with a B.S. 
					in Physics (Intensive), and had worked in the labs of Professors 
					<a href="https://qulab.eng.yale.edu/">Michel Devoret</a> (superconducting qubits, microwave resonators), 
					<a href="https://uqm.yale.edu/">Nir Navon</a> (ultracold atoms, MOT for Potassium), and 
					<a href="http://www.astro.yale.edu/mgeha/">Marla Geha</a> (satelite galaxies, statistical analysis). 
					He was previously an associate physicist at <a href="https://ionq.com/">IonQ</a>, a trapped ion quantum 
					computing startup associated with <a href="http://iontrap.umd.edu/">Chris Monroe</a> and 
					<a href="https://mist.pratt.duke.edu/">Jungsang Kim</a>, and is <a href="https://physics.uchicago.edu/people/profile/chunyang-ding/">
					currently a PhD student at the University of Chicago</a>, working in the lab of 
					<a href="http://schusterlab.uchicago.edu/index.html"> Professor David Schuster</a>. 
					Besides his passion for quantum computing, Chunny is an <a href="https://www.goodreads.com/user/show/10726611-chunyang-ding">
					avid reader</a> of sci-fi (among other genres) and is enthusiastic about <a href="/pastwork">scientific
					communication</a>. He's currently learning how to <a href="/guitar">be bad at more instruments</a>, 
					create <a href="/quine">poorly-designed websites</a>, and <a href ="/food">cooking non-poisonous foods</a>.
				</p-->
			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>