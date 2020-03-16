<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Temperature Converter</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<?php
	require "inc/functions/functions.inc.php";
	require "inc/logic.inc.php";
	require "inc/nav.inc.php";
	?>
	<div class="container">
		<div id="wrapper">
			<div class="jumbotron">
				<h1 class="display-4">Temperature Converter</h1>
				<p class="lead">CTEC 127 - PHP with SQL 1</p>
				<hr class="my-4">
				<p>Here you can convert temperatures from celsius, fahrenheit or kelvin to another. Simply select which temperature you want converted in the first box along with your temperature and select the temperature you want to convert to and click on the convert button and it'll show you the converted temperature on the second window.</p>
			</div>
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<div class="row">
					<div class="col-xs-12 col-sm-10 col-md-6">
						<label for="temp" class="mt-1 font-weight-bold">Temperature</label>
						<input type="text" value="<?php if (isset($_POST['originaltemp'])) echo $_POST['originaltemp']; ?>" name="originaltemp" size="7" maxlength="7" id="temp" class="form-control">
					</div>

					<div class="col-lg-4 col-sm-4 col-xs-4">
						<label for="originalunit" class="font-weight-bold">Original</label>
						<select name="originalunit" class="form-control mt-1 mb-5" id="originalunit">
							<option value="--Select--" <?php if ($originalUnit == "--Select--") echo ' selected="selected"'; ?>>--Select--</option>
							<option value="celsius" <?php if ($originalUnit == "celsius") echo ' selected="selected"'; ?>>Celsius</option>
							<option value="fahrenheit" <?php if ($originalUnit == "fahrenheit") echo ' selected="selected"'; ?>>Fahrenheit</option>
							<option value="kelvin" <?php if ($originalUnit == "kelvin") echo ' selected="selected"'; ?>>Kelvin</option>
						</select>
					</div>

					<div class="col-xs-10 col-sm-10 col-md-6">
						<label for="convertedtemp" class="mt-2 font-weight-bold">Converted Temperature</label>
						<input type="text" value="<?php if (isset($_POST['originaltemp'])) echo round($convertedTemp, 1); ?>" name="convertedtemp" size="7" maxlength="7" id="convertedtemp" class="form-control">
					</div>

					<div class="col-lg-4 col-sm-4 col-xs-4">
						<label for="conversionunit" class="mt-2 font-weight-bold">Convert To</label>
						<select name="conversionunit" class=" form-control" id="conversionunit">
							<option value="--Select--" <?php if ($conversionUnit == "--Select--") echo ' selected="selected"'; ?>>--Select--</option>
							<option value="celsius" <?php if ($conversionUnit == "celsius") echo ' selected="selected"'; ?>>Celsius</option>
							<option value="fahrenheit" <?php if ($conversionUnit == "fahrenheit") echo ' selected="selected"'; ?>>Fahrenheit</option>
							<option value="kelvin" <?php if ($conversionUnit == "kelvin") echo ' selected="selected"'; ?>>Kelvin</option>
						</select>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-6 mt-4">
						<input type="submit" class="btn btn-secondary" value="Convert">
					</div>
				</div>
			</form>


			<div class="row">
				<div class="bg-info col-6 mt-4">
					<h2 class="mt-5">Conversion Formula</h2>
					<p class="font-weight-bold mt-4">Celsius</p>
					<p>To Fahrenheit:</p>
					<ul>
						<li>F = C * 9 / 5 + 32</li>
					</ul>
					<p>To Kelvin:</p>
					<ul>
						<li>K = C + 273.15</li>
					</ul>
					<p class="font-weight-bold mt-4">Fahrenheit</p>
					<p>To Celsius:</p>
					<ul>
						<li>C = (F - 32) * 5 / 9</li>
					</ul>
					<p>To Kelvin:</p>
					<ul>
						<li>K = (F + 459.67) * 5 / 9</li>
					</ul>
					<p class="font-weight-bold mt-4">Kelvin</p>
					<p>To Celsius:</p>
					<ul>
						<li>C = K - 273.15</li>
					</ul>
					<p>To Fahrenheit:</p>
					<ul>
						<li>F = k * 9 / 5 - 459.67</li>
					</ul>
				</div>

				<div class="bg-info col-6 mt-4">
					<h2 class="mt-5">Info About:</h2>
					<p class="font-weight-bold mt-4">Celsius</p>
					<p>The Celsius scale, also known as the centigrade scale, is a temperature scale. It is named after the Swedish astronomer Anders Celsius (1701–1744), who developed a similar temperature scale. As an SI derived unit, it is used worldwide. From 1743, the Celsius scale is based on 0 °C for the freezing point of water and 100 °C for the boiling point of water.</p>
					<p class="font-weight-bold mt-4">Fahrenheit</p>
					<p>The Fahrenheit scale is a temperature scale based on one proposed in 1724 by German physicist Daniel Gabriel Fahrenheit (1686–1736) It uses the degree Fahrenheit (symbol: °F) as the unit. The scale is now usually defined by two fixed points: the temperature at which water freezes into ice: 32 °F, and the boiling point of water: 212 °F, as defined at sea level and standard atmospheric pressure.</p>
					<p class="font-weight-bold mt-4">Kelvin</p>
					<p>The kelvin is the base unit of temperature in the International System of Units (SI), having the unit symbol K. It is named after the Belfast-born, Glasgow University engineer and physicist William Thomson, 1st Baron Kelvin (1824–1907). Unlike the degree Fahrenheit and degree Celsius, the kelvin is not referred to or written as a degree. The kelvin is the primary unit of temperature measurement in the physical sciences, but is often used in conjunction with the degree Celsius, which has the same magnitude.</p>

				</div>
				<div class="col-12 mt-4 text-center">
					<p>&copy; Copyright, Some Rights Reserved</p>
				</div>
			</div><!-- end of row div-->
		</div><!-- end wrapper div-->
	</div><!-- end of container div -->

	<link rel="stylesheet" href="js/bootstrap.min.js">
	<link rel="stylesheet" href="js/jquery-3.3.1.min.js">
</body>

</html>