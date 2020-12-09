<!DOCTYPE html>
<html>
	<head>
		<?php $page_name = "Chunyang Ding - Physics References"; ?>
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
				<h1>Useful physics/math references</h1>
				<div id="toc"> 
					<p class="toc_title"> Contents </p>
					<ul> 
						<li> 1 <a href="#motivation"> Math </a> </li>
							<ul>
								<li> 1.1 <a href="#Trig"> Trig Identities </a> </li> 
								<li> 1.2 <a href="#HyperbolicTrig"> Hyperbolic Trig Identities </a> </li> 
								<li> 1.3 <a href="#Commutator"> Commutator Identities </a> </li>
								<li> 1.4 <a href="#Poisson"> Poisson Brackets </a> </li>
								<li> 1.5 <a href="#Determinant"> Determinant Rules </a> </li>
								<li> 1.6 <a href="#Levi-Cevita"> Levi-Cevita Symbol </a> </li> 
								<li> 1.7 <a href="#Coordinate"> Coordinate Transforms </a> </li>
								<li> 1.8 <a href="#Taylor"> Taylor Expansions </a> </li> 
								<li> 1.9 <a href="#Approximations"> Approximations </a> </li> 
							</ul>
						<li> 2 <a href> Quantum Mechanics </a> </li>
							<ul> 
								<li> 2.1 <a href="#Pauli"> Pauli Matrices </a> </li> 
								<li> 2.2 <a href="#MatrixExponentials"> Matrix Exponentials </a> </li>
								<li> 2.3 <a href="#BCH"> Baker-Campbell-Hausdorff Formula </a> </li> 
								<li> 2.4 <a href="#QHO"> Quantum Harmonic Oscillator </a> </li> 
								<li> 2.5 <a href="#ParticleBox"> Particle in a Box </a> </li> 
								<li> 2.6 <a href="#SphericalHarmonics"> Spherical Harmonics </a> </li> 
								<li> 2.7 <a href="#Angular"> Angular Momentum </a> </li> 
							</ul> 
						<li> 3 <a href> Classical Mechanics </a> </li>
						</ul>
					</ul>
				</div>

				
				<h2 id="Trig"> Trig Identities <a href="#toc">(top)</a> </h2>
				<p> \( \sin(2 \theta) = 2 \sin(\theta) \cos(\theta) \) </p>
				<p> \( \cos(2 \theta) = \cos^2(\theta) - \sin^2(\theta) = 2 \cos^2(\theta) - 1 = 1 - 2\sin^2(\theta) \)</p>
				<p> \( \tan(2 \theta) = \frac{2 \tan(\theta)}{1 - \tan^2(\theta) } \) </p>
				
				<p> \( \sin^2(\theta) + \cos^2(\theta) = 1 \) </p> 
				<p> \( \tan^2(\theta) + 1 = \sec^2(\theta) \) </p>
				<p> \( \cot^2(\theta) + 1 = \csc^2(\theta) \) </p>
				
				<p> \( \sin(x) = \frac{i}{2} (e^{-ix} - e^{ix} ) \) </p>
				<p> \( \cos(x) = \frac{1}{2} (e^{-ix} + e^{ix} ) \) </p>
				
				<p> \( \sin^2(x) = \frac{-1}{4} (e^{-2ix} + e^{2ix} ) + \frac{1}{2} \)</p>
				<p> \( \cos^2(x) = \frac{1}{4}  (e^{-2ix} + e^{2ix} ) + \frac{1}{2} \)</p>
				
				<h2 id="HyperbolicTrig" > Hyperbolic Trig Identities <a href="#toc">(top)</a> </h2>
				
				<p> \( \sinh(x) = \frac{e^x + e^{-x}}{2} \) </p>
				<p> \( \cosh(x) = \frac{e^x - e^{-x}}{2} \) </p>
				
				<p> \( \cosh(x) - \sinh(x) = 1 \) </p>
				
				<h2 id="Commutator"> Commutator Identities <a href="#toc">(top)</a>  </h2>
				
				<p> \( [A, B] = AB - BA \) </p> 
				<p> \( [A, B] = - [B, A] \) </p>
				<p> \( [A, B + C] = [A, B] + [A, C] \) </p>
				<p> \( [A, BC] = [A, B]C + B[A, C] \) </p>
				<p> \( [AB, C] = [A, C]B + A[B, C] \) </p>
				
				<h2 id="Poisson" > Poisson Brackets <a href="#toc">(top)</a> </h2> 
				<p> \( \{F, G\} = \Sigma_i \left( \frac{\partial F}{\partial q_i} \frac{\partial G}{\partial p_i} - \frac{\partial F}{\partial p_i} \frac{\partial G}{\partial q_i} \right) \) </p>
				<p> \( \{F, G\} = -\{G, F\} \) </p>
				<p> \( \{aF + bG, H\} = a\{F, H\} + b\{G, H\} \) </p>
				<p> \( \{FG, H\} = F [G, H] + [F, H] G \) </p> 
				<p> \( \{q_i, q_j\} = 0; \quad {p_i, p_j} = 0; \quad {q_i, p_j} = \delta_{ij} \) </p>
				
				<h2 id="Determinant" > Determinant Identities <a href="#toc">(top)</a> </h2> 
				
				<h2 id="Levi-Cevita" > Levi-Cevita Symbol <a href="#toc">(top)</a> </h2>
				<p> \( \epsilon_{ijk} = 1 \mathrm{if} ijk = 123, 231, 312; \quad -1 \mathrm{ if } ijk = 321, 213, 132 \) </p> 
				<p> \( a \times b = \epsilon_{ijk} a_j b_k \)</p>
				<p> \( L_i = \epsilon_{ijk} x_j p_k \) </p>
				<p> \( \epsilon_{ijk} \epsilon_{ilm} = \delta_{jl} \delta_{km} - \delta{jm} \delta_{kl} \) </p> 
				
				<h2 id="Coordinate"> Coordinate Transformations <a href="#toc">(top)</a> </h2>
				
				<p> Spherical: </p> 
				<p> \( x = r \sin(\theta) \cos(\phi) \) </p>
				<p> \( y = r \sin(\theta) \sin(\phi) \) </p>
				<p> \( z = r \cos(\theta) \) </p>
				<p> Lagrangian: </p>
				<p> \( \dot{x}^2 + \dot{y}^2 + \dot{z}^2 = \dot{r}^2 + r^2 \dot{\theta}^2 + r^2 \sin^2(\theta)\dot{\phi}^2 \) </p>
				
				<h2 id="Taylor"> Taylor Expansion <a href="#toc">(top)</a> </h2> 
				<p> \( f(x=a) = f(a) + \frac{f'(a)}{1!} (x-a) + \frac{f''(a)}{2!} (x-a)^2 + \frac{f'''(a)}{3!} (x-a)^3 + ... \) </p>
				<p> \( \sin(x) = x - \frac{x^3}{3!} + \frac{x^5}{5!} - \frac{x^7}{7!} + ... \) </p> 
				<p> \( \cos(x) = 1 - \frac{x^2}{2!} + \frac{x^4}{4!} - \frac{x^6}{6!} + ... \) </p> 
				
				<p> \( \sinh(x) = x + \frac{x^3}{3!} + \frac{x^5}{5!} + \frac{x^7}{7!} + ... \) </p> 
				<p> \( \cosh(x) = 1 + \frac{x^2}{2!} + \frac{x^4}{4!} + \frac{x^6}{6!} + ... \) </p> 

				
				<h2 id="Approximations" > Approximations <a href="#toc">(top)</a> </h2>
				<p> \( \sqrt{1 + x} \approx 1 + \frac{x}{2} - \frac{x^2}{8} - ... \) </p> 
				<p> \( e^{ix} \approx 1 + ix - \frac{x^2}{2!} - i \frac{x^3}{3!} + \frac{x^4}{4!} + ... \) </p> 
				<p> \( \sin(x) \approx x; \quad \cos(x) \approx 1 - \frac{x^2}{2}; \quad \tan(x) \approx x \) </p> 
				
				<h2 id="Pauli" > Pauli Matrices <a href="#toc">(top)</a> </h2>
				<p> \( S_x = \frac{\hbar}{2} \begin{bmatrix} 0 & 1 \\ 1 & 0 \end{bmatrix} \) </p> 
				<p> \( S_y = \frac{\hbar}{2} \begin{bmatrix} 0 & -i \\ i & 0 \end{bmatrix} \) </p> 
				<p> \( S_z = \frac{\hbar}{2} \begin{bmatrix} 1 & 0 \\ 0 & 1 \end{bmatrix} \) </p> 
				
				<p> \( [S_i, S_j] = i \epsilon_{ijk} \hbar S_k \) </p>
				<p> \( {S_i, S_j} = \frac{\hbar^2}{2} \delta_{ij} \) </p> 
				
				<h2 id="MatrixExponentials" > Matrix Exponentials <a href="#toc">(top)</a> </h2>
				<p> \( \mathrm{exp}(X^T) = \mathrm{exp}(X)^T \) </p>
				<p> \( \mathrm{exp}(X^*) = \mathrm{exp}{X}^* \) </p> 
				<p> Jacobi's Formula: \( \mathrm{det}(e^A) = e^{\mathrm{tr}(A)} \) </p> 
				
				<h2 id = "BCH" > Baker-Campbell-Hausdoff Formula <a href="#toc">(top)</a> </h2> 
				<p> \( e^X e^Y = e^Z, \mathrm{where} Z = X + Y + \frac{1}{2}[X, Y] + \frac{1}{12} [X, [X, Y] ] - \frac{1}{12} [Y, [X, Y] ] + ... \) </p> 
				<p> Baker Hasudorff Lemma: </p> 
				<p> \( e^{-G} A e^G = A + [G, A] + \frac{1}{2!} [G, [G, A]] + \frac{1}{3!} [G, [G, [G, A]]] + ... \) </p> 

				<h2 id = "QHO" > Quantum Harmonic Oscillator <a href="#toc">(top)</a> </h2>
				<p> \( E_n = (n + \frac{1}{2}) \hbar \omega \) </p> 
				<p> \( H = \frac{p^2}{2m} + \frac{1}{2} m \omega^2 x^2 \) </p> 
				
				<p> \( x = \sqrt{\frac{\hbar}{2 m \omega} } (a^\dagger + a); \quad p = i \sqrt{\frac{m \hbar \omega}{2}} (a^\dagger - a) \) </p> 
				<p> \( a|n\rangle = \sqrt{n} |n - 1\rangle; \quad a^\dagger |n \rangle = \sqrt{n+1} |n+1\rangle \) </p> 
				
				<h2 id ="ParticleBox"> Particle in a Box </h2>
				<p> \( V = 0, 0 \leq x \leq \) </p>
				<p> \( E_n = \frac{n^2 \pi^2 \hbar^2}{2 m L^2} \) </p>
				<p> \( \psi_n = \sqrt{\frac{2}{L}} \sin(\frac{n \pi x}{L}) \) </p> 
				
				<h2 id = "SphericalHarmonics" > Spherical Harmonics (Central Potentials) <a href="#toc">(top)</a>  </h2>
				
				<p> \( Y_0^0 = \frac{1}{2\sqrt{\pi}} \) </p> 
				
				<p> \( Y_1^1 = - \sqrt{\frac{3}{8\pi}} e^{i \phi} \sin(\theta) \) </p> 
				<p> \( Y_1^0 = \frac{1}{2} \sqrt{\frac{3}{\pi}} \cos(\theta) \) </p> 
				<p> \( Y_1^{-1} = \sqrt{\frac{3}{8\pi}} e^{- i \phi} \sin(\theta) \) </p> 
				
				<p> \( Y_2^{-2} = \frac{1}{4} \sqrt{\frac{15}{2\pi}} e^{- 2 i \phi} \sin^2(\theta) \) </p> 
				<p> \( Y_2^{-1} = \frac{1}{2} \sqrt{\frac{15}{2\pi}} e^{- i \phi} \sin(\theta) \cos(\theta) \) </p> 
				<p> \( Y_2^0 = \frac{1}{4} \sqrt{\frac{5}{\pi}} (3 \cos^2(\theta) - 1) \) </p> 
				<p> \( Y_2^1 = - \frac{1}{2} \sqrt{\frac{15}{2\pi}} e^{i \phi} \sin(\theta) \cos(\theta) \) </p> 			
				<p> \( Y_2^2 = \frac{1}{4} \sqrt{\frac{15}{2\pi}} e^{2 i \phi} \sin^2(\theta) \) </p> 

				<h2 id="AngularMomentum"> Angular Momentum <a href="#toc">(top)</a> </h2>
				<p> \( L^2 |l, m\rangle = \hbar l (l+1) |l, m \rangle \) </p>
				<p> \( L_z |l, m\rangle = \hbar m |l, m \rangle \) </p>
				
				<p> \( L_+ |l, m\rangle = \hbar \sqrt{ l (l+1) + m(m+1)} |l, m+1 \rangle \)</p> 
				<p> \( L_- |l, m\rangle = \hbar \sqrt{ l (l+1) + m(m-1)} |l, m-1 \rangle \) </p> 
				<p> \( L_x = \frac{1}{2} (L_+ + L_-); \quad L_y = \frac{1}{2i} (L_+ - L_-) \) </p> 
				
				<h2> Spin Additions <a href="#toc">(top)</a> </h2> 
				
				<h2> Wigner-Eckert Theorem <a href="#toc">(top)</a> </h2> 
				
				<h2 id = "Perturbation"> Perturbation Theory <a href="#toc">(top)</a> </h2>
				
				<p> Non-degenerate perturbations: \(H' = H^{(0)} + \lambda V \) </p>
				<p> First order: </p> 
				<p> \( \Delta E_n^{(1)} = \lambda \langle n | V | n \rangle \) </p>
				
				<p> Second order: </p> 
				<p> \( \Delta E_n^{(2)} =  \lambda \Sigma_{i \neq n} \frac{|\langle i | V | n \rangle|^2}{E_n^{(0)} - E_i^{(0)}} \) </p> 
				
				<p> Degenerate perturbations: </p> 
				<p> \( W_{ij} = \langle i | V | j \rangle \) </p> 
				<p> Solve for eigenvalues of W to find the lifted degeneracies for energy and eigenvectors for new "good" states. </p> 
				
				<h2 id="HamiltonEquations" > Hamilton's Equations <a href="#toc">(top)</a> </h2> 
				<p> \( \frac{\partial H}{\partial q_i} = - \dot{p}_i \)</p>
				<p> \( \frac{\partial H}{\partial p_i} = \dot{q}_i \) </p>
				

			</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>
