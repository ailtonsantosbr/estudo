</<?php 
// show all erros
error_reporting(E_ALL);

$great = 'fantastic';

// won´t work, outputs: This is {fantastic}
echo "This is { $great }";

echo "This is {$great}";


 ?>
