<!DOCTYPE html>
<html>
	<head>
		<title>shrug</title>
	</head>
	<body>
		<h1> ¯\_(ツ)_/¯ </h1>
		<button id="temp" onclick="copyShrug()">¯\_(ツ)_/¯</button> 
		<script>
		function copyShrug() {
			var tempInput = document.createElement("¯\_(ツ)_/¯");
			tempInput.style = "position: absolute; left: -1000px; top: -1000px";
			tempInput.value = value;
			document.body.appendChild(tempInput);
			tempInput.select();
			document.execCommand("copy");
			document.body.removeChild(tempInput);
		} 
		</script>
	</body>
</html>