<!DOCTYPE html>
<html>
	<head>
		<title>shrug</title>
		<style>
		
		.tooltip {
			position: relative;
			display: inline-block;
		}

		.tooltip .tooltiptext {
			visibility: hidden;
			width: 140px;
			background-color: #555;
			color: #fff;
			text-align: center;
			border-radius: 6px;
			padding: 5px;
			position: absolute;
			z-index: 1;
			bottom: 150%;
			left: 50%;
			margin-left: -75px;
			opacity: 0;
			transition: opacity 0.3s;
		}

		.tooltip .tooltiptext::after {
			content: "";
			position: absolute;
			top: 100%;
			left: 50%;
			margin-left: -5px;
			border-width: 5px;
			border-style: solid;
			border-color: #555 transparent transparent transparent;
		}

		.tooltip:hover .tooltiptext {
			visibility: visible;
			opacity: 1;
		}
		
		</style>
	</head>
	<body>
		<h1> ¯\_(ツ)_/¯ </h1>
		<div class="tooltip">
			<button id="temp" onclick="copyShrug()">¯\_(ツ)_/¯</button> 
		</div>
		<script>
		function copyShrug() {
			/* Get the text field */
			var copyText = document.querySelector("#temp");
			copyText.select();
			
			/* Copy the text of the button??? */
			document.execCommand("copy");

			/*Pop up a tooltip that just shrugs at you*/
			var tooltip = document.getElementById("myTooltip");
			tooltip.innerHTML = "¯\_(ツ)_/¯";
		} 
		</script>
	</body>
</html>