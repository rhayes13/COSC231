<!--              Part A, Number 9             -->
<!--      Sum of randomly generated digits     -->

<!--  Created by Ryan Hayes and Nathan Jumaah  -->
<!--               on 11 Mar 2020              -->
<!--          Last updated 17 Mar 2020         -->

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Hayes/Jumaah - Number 9: Sum of digits</title>
</head>

<body>
<?php

echo '<h1>' . "Sum of Digits (Part A, #9)" . '</h1>';
echo '<p>' . "Sums the individual digits of a randomly generated string numbers" . '</p>' . '<br>';

function getNum() {
  return rand(100,100000);
}

$nums = array();
$total = array();

//Creates 5 numbers
for ($i = 0; $i < 5; $i++) {
      $nums[$i] = getNum();
}  
echo "<br>";


//Print numbers
echo '<b>' . 'Elements of nums array:' . '</b>';
for ($i = 0; $i < 5; $i++) {
      echo "<br> $nums[$i] ";
}  
echo "<br>";
echo "<br>";
echo "<br>";

 
for ($i =0; $i<count($nums); $i++)  
{
	$sum=0; $rem=0; 
	for($j=0; $j<=strlen($nums[$i]); $j++){
       $rem=$nums[$i]%10;  
       $sum = $sum + $rem;  
       $nums[$i]=$nums[$i]/10; 
   }
   $total[$i] = $sum;
}


//Print numbers
echo '<b>' . 'Elements of total array:' . '</b>';
for ($i = 0; $i < 5; $i++) {
      echo "<br> $total[$i] ";
}  

?>


</body>
</html>
