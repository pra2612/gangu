<!DOCTYPE html>
<html>
<head>
	<title>Number Operations</title>
</head>
<body>
	<h1>Number Operations</h1>
	<form method="POST">
		<p>
			<label>Enter a number:</label>
			<input type="number" name="number" required>
		</p>
		<p>
			<input type="submit" name="submit" value="Calculate">
		</p>
	</form>
	<?php
	// Check if the form has been submitted
	if (isset($_POST["submit"])) {
		$number = $_POST["number"];
		echo "<h2>Fibonacci Series:</h2>";
		echo fibonacciSeries($number);
		echo "<h2>Sum of Digits:</h2>";
		echo sumOfDigits($number);
	}

	// Function to calculate the Fibonacci series
	function fibonacciSeries($number) {
		$previous = 0;
		$current = 1;
		$series = "0, 1";
		for ($i = 2; $i < $number; $i++) {
			$next = $previous + $current;
			$series .= ", $next";
			$previous = $current;
			$current = $next;
		}
		return "<p>$series</p>";
	}

	// Function to calculate the sum of digits
	function sumOfDigits($number) {
		$sum = 0;
		while ($number > 0) {
			$digit = $number % 10;
			$sum += $digit;
			$number = floor($number / 10);
		}
		return "<p>$sum</p>";
	}
	?>
</body>
</html>
