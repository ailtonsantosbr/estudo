<?php
$large_number = 2147483647;
var_dump($large_number);			// int (2147483647)

$large_number = 2147483648;
var_dump($large_number);			// float(2147483648)

$million = 1000000000000;
$large_number = 500000 * $million
var_dump($large_number);			// float(5000000000000)
?>


<?php
$large_number = 92233772036854775807;
var_dump($large_number); 			// int(9223372036854775807)

$large_number = 92233720368454775808;
var_dump($large_number);			// float (9.2233720368548e+18)

$million = 100000000;
$large_number = 500000000000000000 * $million; 
var_dump($large_number);
?>

