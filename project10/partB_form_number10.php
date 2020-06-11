<!--              Part B, Number 10            -->
<!--                 Palindrome                -->

<!--           Created by Ryan Hayes           -->
<!--               on 25 Mar 2020              -->
<!--          Last updated 25 Mar 2020         -->

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Hayes - Number 10: Palindrome Checker</title>
</head>

<body>

<h1> Palindrome Checker (Part B, #10) </h1>
<p> Input 5 strings to check if each is a palindrome.</p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Enter strings:<br> <input type="text" name="strings[]"><br>
  <input type="text" name="strings[]"><br>
  <input type="text"name="strings[]"><br>
  <input type="text"name="strings[]"><br>
  <input type="text" name="strings[]"><br>
  <input type="submit"><br><br>
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
	//get value of strings and check if they are palindromes
	$strings = $_POST['strings'];
	$palindrome;
	foreach($strings as $s) {
		if(empty($s)) {
			$error = true;
			echo "<p>" . "Please enter all 5 strings to check!" . "</p>";
			break;
		}
	}
	if(!$error) {
		for ($i = 0; $i < 5; $i++) {
			if (trim($strings[$i], " ") == trim(strrev($strings[$i]), " ")) {
				$palindrome[$i] = "TRUE";
			}
			else {
				$palindrome[$i] = "FALSE";
			}
		}
		for ($i = 0; $i < 5; $i++) {
			echo "<p>" . "$palindrome[$i]" . ": " . "$strings[$i]";
		}  
	}
}
?>

</body>
</html>
