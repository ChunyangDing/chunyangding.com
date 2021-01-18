<!DOCTYPE html>
<html>
	<header>
		<?php $page_name = "Blog - Fahrenheit and Celsius"; ?>
		<title><?php echo $page_name; ?></title>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php'; ?>
	</header>
	
	<body> 
		<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/navbar.php'; ?>
		<div class="container">
		<div class="blurb">
				
		<h1> Why Fahrenheit is a better temperature scale (for humans!) than Celsius </h1>

		<p> In most things, I am a staunch supporter of the metric system. The units are logical, convert easily, and have well-defined physical meanings. However, the one place where this breaks down is in the temperature scales, at least for humans and for describing weather events. While other arguments about units tend to be around familiarity, I think temperature in particular has some unique applications. </p>

		<p> 1) A typical range of livable temperatures is between -30F to +120F, whereas the same scale in Celsius is -20C to +40C. At the same time, daily temperature can fluctuate about 10°F, which is about 5.5°C. This means that you can typically describe a days temperature in Fahrenheit with a precision of only the tens unit (ie, today is in the upper thirties), whereas to convey the same information in Celsius, you need to either be too precise (today is around 2 degrees) or give too much information (today is between 0-4 degrees C). </p>

		<p> 2) The Fahrenheit temperature scale is more calibrated for human-comfortable temperatures, whereas the Celsius temperature scale is calibrated for water. In general, 0F feels very cold, and 100F feels very hot. We are familiar with this 0-100 scale in many other uses of life, so treating it almost as a "percentage" scale allows for easy understanding. Also, the main purpose of weather and temperature forecasts is to determine what kind of clothing to wear. In this sense, having a convenient unit scale can translate to better decisions. On the other hand, the Celsius scale is much more limited, so it is much easier to make a mistake. There is a very big difference between the weather being 20C and 29C, so getting those two confused (by only reading the 10s digit) can result in you being uncomfortable warm or cold. In other words, you only need one bit of information (generally) for Fahrenheit, while you almost always need two bits of information for Celsius. </p>

		<p> 3) Fahrenheit is more useful for approximate applications, such as cooking and baking. This is again something related to levels of precision - in general, you do not need three or four significant figures for preparing a recipe. For one, your stove and oven do not typically have such fine controls, and also, the inherent variability of cooking food that are differently sized, or varying levels of fattiness, or different atmospheric conditions, usually leads to large ranges of temperature. Thus, a recipe that asks you to bake a casserole at 425 degrees F really is only accurate to about +/- 25 degrees, which is usually more than sufficient. There are specialty cases, especially for baking, candy-making, and chocolatiering that do require more precision; for those situations, I wholeheartedly endorse Celsius. </p>

		<p> But wait, you might argue - cant you do all the same with the Celsius scale, and also develop a better intuition? Well, yes you can, but that was not the designed purpose of the Celsius scale. It is quite rare for these two purposes to overlap in my opinion. When you are doing some lab experiment that needs to be carefully climate controlled, you would not expose your sample to the outside world anyways, so the weather conditions would not apply. And for heating a sample, you would use a specialty oven designed for precision, not a standard kitchen oven. Does it make sense to have two different temperature scales to remember? I'm not entirely sure. </p>

		<p> Sidenote - I do have an argument for using inches (in a machine shop context) compared to centimeters, although I feel much less strongly about it.  Primarily, the imperial system often uses fractional powers of 2 as primary units. For many applications, this kind of scale is more practical for having a small number of tools for a broad range of purposes, especially for machining purposes that do not require a very small tolerance. Of course, this is not a endorsement of the drill bit/wire gauges system, which is absolutely insane. </p>		
		
		<p> <a href="/2020/07/24/stranger-in-a-strange-land">Previous</a> | <a href="/blog">Return to main</a></p>

		</div>
		</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/webcounter.php';
		$access_number = visitor($page_name); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footbar.php'; ?>
	</body>
</html>