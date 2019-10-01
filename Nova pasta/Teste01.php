
<?php
$foo = True; // atribui o valor True para $foo
?>

<?php
// == É um operador que testa
// igualde retorna um booleano.
if ($action == "mostrar_versão") {
	echo "A versão e 1.2.3";
}

// isto nao e necessário....

if($exibir_separadores == True) {
	echo "<hr>\n";
}

// porque voce pode simplesmente escreveer isso;

if ($exibir_separadores) {
	echo "<hr>\n";
}
?>
