<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Chunyang Ding - Gallery of Superconducting Qubits"; ?>
		<title><?php echo $page_name; ?></title>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php'; ?>
		<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
		<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
		<link rel="stylesheet" type="text/css" href="/css/toc.css">
	</head>
	<body>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		
		<div class="container">
			<div class="blurb">
				<h1>Gallery of Superconducting Qubits</h1>
				<div id="toc"> 
					<p class="toc_title"> Contents </p>
					<ul> 
						<li> 1 <a href="#charge"> Charge-based qubits </a> </li>
							<ul> 
								<li> 1.1 <a href="#cpb"> Cooper Pair Box </a> </li>
								<li> 1.2 <a href="#transmon"> Transmon </a> </li> 
								<li> 1.3 <a href="xmon">Xmon </a> </li>
							</ul>
						<li> 2 <a href="#flux"> Flux-based qubits </a> </li>
							<ul> 
								<li> 2.1 <a href="#fluxqubit"> Flux Qubit </a> </li>
								<li> 2.2 <a href="#fluxonium"> Fluxonium </a> </li> 
							</ul> 
					</ul>
				</div>

				
				<h2 id="cpb"> Cooper Pair Box <a href="#toc">(top)</a> </h2>
				<p> Basic Hamiltonian: </p> 
				<p> \( H = x^2 + p2 /) </p> 
				
				<p> Circuit Diagram: </p> 
				<p> [Insert picture here] </p>
				
				<p> Current and historical results: </p> 
				<table>
					<tr>
						<th> Date </th>
						<th> \( T_1 (\mu s)\) </th>
						<th> \( T_{2E} (\mu s)\) </th>
						<th> 1-qubit gate time (ns) </th> 
						<th> 2-qubit gate time (ns) </th>
						<th> Reference </th>
					</tr> 
					<tr> 
						<td> 01/01/2000 </th>
						<td> 100 </th>
						<td> 200 </th>
						<th> 50 </th>
						<th> 200 </th> 
						<th> arXiv: 1003:20148 </th> 
					</tr>
				</table> 				

			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>
