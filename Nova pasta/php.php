<?php
$a_bool = true; 	// um booleano
$a_str 	= "foo";	// uma string
$a_str2	= 'foo';	// uma string
$an_int	= 12;		// um inteiro

echo gettype($a_bool);	// mostra:	boolean
echo gettype($a_str);	// mostra:  	string

// se ele é um inteiro, incrementa-o com quatro
if (is_int($an_int)) {
	$an_int += 4;
}

// se $bool e uma string, mostre-a
// (não imoprime nada)
if (is_string($a_bool))	{
	echo "string: $a_boool";
}
?>
