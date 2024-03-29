<?php

class Cachorro {
	private $Nascimento;

	# metodo construtor
	function __construct($nome) {
		$this->nome = $nome;
	}

	#intercepta atribuição
	function __set($propriedade, $valor) {
		if ($propriedade == 'Nascimento') {
			# verifica se vaor e dividido em
			# 3 partes separadas por '/'
			if (count(explode('/', $valor))==3) {
				echo "Dado '$valor', atribuido à '$propriedade'\n";
				$this->$propriedade = $valor;
			} else {
				echo "Dado '$valor', não atribuido a '$propriedade'\n"
			}
		} else {
			$this->$propriedade = $valor;
		}
	}
}

?>