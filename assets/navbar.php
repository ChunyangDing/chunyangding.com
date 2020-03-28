<?php
echo 
'<div class="navbar">
  <a href="/">Home</a>
  <div class="dropdown">
    <button class="dropbtn"> About Me &#9660;
    </button>
    <div class="dropdown-content">
			<a href="/about">About</a>
			<a href="/cv">CV</a>
			<a href="/failure_cv">Failure CV</a>
		</div>
	</div>

	<div class = "dropdown">
		<button class="dropbtn"> Around the Web &#9660;
		</button>
		<div class="dropdown-content">
			<a href="/pastwork">Past Work</a>
			<a href="/booklist">Book Reviews</a>
			<a href="/links">Links</a>
		</div>
	</div>

	<div class="dropdown">
		<button class="dropbtn"> Blogs &#9660;
		</button>
		<div class="dropdown-content">
			<a href="/blogHome">Current Blog</a>
			<a href="https://figtwo.wordpress.com">Fig Two (QCJC)</a>
			<a href="http://campuspress.yale.edu/chunyangding/">Campuspress (Yale)</a>
			<a href="https://seattlechunny.wordpress.com">Seattlechunny (HS)</a>
		</div>
	</div>
	
	
	<div class="dropdown">
		<button class="dropbtn"> Hobbies &#9660; </button>
		<div class="dropdown-content">
			<a href="/food">    Cooking  </a>
			<a href="/music">   Guitar   </a>
			<a href="/finance"> Finance  </a>
			<a href="/serverDesign"> Website </a>
		</div>
	</div>
</div>';
?>