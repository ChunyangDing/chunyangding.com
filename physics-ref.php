<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Chunyang Ding - Physics References"; ?>
		<title><?php echo $page_name; ?></title>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php'; ?>
		<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
		<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
	</head>
	<body>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		
		<div class="container">
			<div class="blurb">
				<h1>Useful physics/math references</h1>
				
				<h2> Trig Identities </h2>
				<p> \( \sin(2 \theta) = 2 \sin(\theta) \cos(\theta) \) </p>
				<p> \( \cos(2 \theta) = \cos^2(\theta) - \sin^2(\theta) = 2 \cos^2(\theta) - 1 = 1 - 2\sin^2(\theta) </p>
				<p> \( \tan(2 \theta) = \frac{2 \tan(\theta)}{1 - \tan^2(\theta) } \) </p>
				
				<p> \( \sin^2(\theta) + \cos^2(\theta) = 1 \) </p> 
				<p> \( \tan^2(\theta) + 1 = \sec^2(\theta) \) </p>
				<p> \( \cot^2(\theta) + 1 = \csc^2(\theta) \) </p>
				
				<h2> Hyperbolic Trig Identities </h2>
				
				<h2> Commutator Identities </h2>
				
				<p> \( [A, B] = AB - BA \) </p> 
				<p> \( [A, B] = - [B, A] \) </p>
				<p> \( [A, B + C] = [A, B] + [A, C] \) </p>
				<p> \( [A, BC] = [A, B]C + B[A, C] \) </p>
				<p> \( [AB, C] = [A, C]B + A[B, C] \) </p>
				
				<h2> Poisson Brackets </h2> 
				<p> \( {F, G} = \Sigma_i \left( \frac{\partial F}{\partial q_i} \frac{\partial G}{\partial p_i} - \frac{\partial F}{\partial p_i} \frac{\partial G}{\partial q_i} \right) \) </p>
				<p> \( {F, G} = -{G, F} \) </p>
				<p> \( {aF + bG, H} = a{F, H} + b{G, H} \) </p>
				<p> \( {FG, H} = F [G, H] + [F, H] G \) </p> 
				<p> \( {q_i, q_j} = 0; \quad {p_i, p_j} = 0; \quad {q_i, p_j} = \delta_{ij} \) </p>
				
				<h2> Levi-Cevita Symbol </h2>
				<p> \( \epsilon_{ijk} = 1 if ijk = 123, 231, 312; -1 if ijk = 321, 213, 132 \) </p> 
				<p> \( a \times b = \epsilon_{ijk} a_j b_k </p>
				<p> \( L_i = \epsilon_{ijk} x_j p_k </p>
				<p> \( \epsilon_{ijk} \epsilon_{ilm} = \delta_{jl} \delta_{km} - \delta{jm} \delta_{kl} \) </p> 
				
				<h2> Coordinate Transformations </h2>
				
				<p> Spherical: </p> 
				<p> \( x = r \sin(\theta) \cos(\phi) \) </p>
				<p> \( y = r \sin(\theta) \sin(\phi) \) </p>
				<p> \( z = r \cos(\theta) \) </p>
				<p> Lagrangian: </p>
				<p> \( \dot{x}^2 + \dot{y}^2 + \dot{z}^2 = \dot{r}^2 + r^2 \dot{\theta}^2 + r^2 \sin^2(\theta)\dot{\phi}^2 \) </p>
				
				<h2> Approximations </h2>
				<p> \( \sqrt{1 + x} \approx 1 + \frac{x}{2} - \frac{x^2}{8} - ... \) </p> 
				
				<h2> Pauli Matrices </h2>
				<p> \( S_x = \frac{\hbar}{2} \begin{bmatrix} 0 & 1 \\ 1 & 0 \end{bmatrix} \) </p> 

				<h2> Quantum Harmonic Oscillator </h2>
				
				<p> \( E_n = (n + \frac{1}[2}) \hbar \omega \) </p> 
				<p> \( H = \frac{p^2}{2m} + \frac{1}{2} m \omega^2 x^2 \) </p> 
				
				<h2> Pertubation Theory </h2>
				
				<p> Non-degenerate perturbations: \(H' = H^{(0)} + \lambda V \) </p>
				<p> First order: </p> 
				<p> \( \Delta E_n = \langle n | V | n \rangle \) </p>
				
				<h2> Hamilton's Equations </h2> 
				<p> \frac{\partial H}{\partial q_i} = - \dot{p}_i </p>
				<p> \frac{\partial H}{\partial p_i} = \dot{q}_i </p>
				

			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>
