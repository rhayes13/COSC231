<!--              Part B, Number 12             -->
<!--         Reverse an array of strings        -->

<!--        Created by Ryan Hayes (SOLO)        -->
<!--               on 18 Mar 2020               -->
<!--          Last updated 18 Mar 2020          -->

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Ryan Hayes - Number 12: Reverse the string</title>
</head>

<body>
<?php

echo '<h1>' . "Reverse The String (Part B, #12)" . '</h1>';
echo '<p>' . "Reverses individual strings within an array" . '</p>' . '<br>' . '<br>';

//Hardcoded strings
$words = array("first string", "this is number two", "three", "FOUR!", "five, finally");
$rev = array();

//Recursive reverse function
function reverse($str) {
	$len = strlen($str);
	if($len == 1) {
		return $str; //base case
	} else {
		$len--;
		return reverse(substr($str, 1, $len)) . substr($str, 0, 1);
	}
}

//Print initial
echo '<b>' . 'Elements of inital array:' . '</b>';
for ($i = 0; $i < 5; $i++) {
      echo "<br> $words[$i] ";
}  
echo "<br>";
echo "<br>";
echo "<br>";

 
//Reverse for each elements, store into $rev array
for ($i = 0; $i < 5; $i++) {
      $rev[$i] = reverse($words[$i]);
}  

//Print output
echo '<b>' . 'Elements of reversed strings array:' . '</b>';
for ($i = 0; $i < 5; $i++) {
      echo "<br> $rev[$i] ";
}  

?>


</body>
</html>
