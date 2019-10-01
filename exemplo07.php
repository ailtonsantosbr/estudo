<?php 
function soma(int ...$valores) {
	return array_sum($valores);
}

echo var_dump(soma(2,2));
echo "<br>";
echo soma(4.5,25.15);
echo "<br>";
echo soma(12,15);
echo "<br>";
echo soma(14,26);
echo "<br>";
echo soma(12.1,14.7,14.6,253.25,618.18);

?>
