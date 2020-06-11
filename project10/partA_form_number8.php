<!--              Part A, Number 8             -->
<!--            Fahrenheit to Celsius          -->

<!--           Created by Ryan Hayes           -->
<!--               on 25 Mar 2020              -->
<!--          Last updated 25 Mar 2020         -->

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Hayes - Number 8: Fahrenheit to Celsius</title>
</head>

<body>

<h1> Fahrenheit/Celsius Converter (Part A, #8) </h1>
<p> Input 5 Fahrenheit values to be converted to Celsius</p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Degrees Fahrenheit:<br> <input type="number" step="any" name="fVal[]"><br>
  <input type="number" step="any" name="fVal[]"><br>
  <input type="number" step="any" name="fVal[]"><br>
  <input type="number" step="any" name="fVal[]"><br>
  <input type="number" step="any" name="fVal[]"><br>
  <input type="submit"><br><br>
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
	//get value and convert to celsius if no field is empty
	$fVal = $_POST['fVal'];
	foreach($fVal as $v) {
		if(empty($v)) {
			$error = true;
			echo "<p>" . "Please enter all 5 numbers!" . "</p>";
			break;
		}
	}
	if(!$error) {
		foreach($fVal as $f) {
			$cVal = round((($f-32)*5)/9, 2);
			echo "<p>" . "$f" . " degrees Fahrenheit is " . "$cVal" . " degrees Celsius</p>";
		}
	}
}
?>

</body>
</html>
