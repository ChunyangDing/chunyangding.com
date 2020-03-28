<html>
	<head>
	<style>
	html {
		height: 100%;
	}
	body {
		display: flex;
		flex-direction: column;
		height: 100vh; /* Avoid the IE 10-11 `min-height` bug. */
	}
	.content {
		flex: 1 0 auto; /* Prevent Chrome, Opera, and Safari from letting these items shrink to smaller than their content's default minimum size. */
		padding: 20px;
	}
	.footer {
		flex-shrink: 0; /* Prevent Chrome, Opera, and Safari from letting these items shrink to smaller than their content's default minimum size. */
		padding: 20px;
	}
	</style>
	</head>
	
	<div class="content">
		<h1>Sticky Footer with Flexbox</h1>
		<p><button id="add">Add Content</button></p>
	</div>

	<footer class="footer">
		Footer 
	</footer>


</html>

