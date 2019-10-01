<?php  

function add_some_extra(&$string) {
	$string .= ' e alguma coisa mais.';
}

$str = 'Isto é uma string,';

add_some_extra($str);

echo $str; // imprime 'isto e uma string, e alguma coisa mais.'


?>