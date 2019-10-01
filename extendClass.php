<?php

class ExtendClass extends SimpleClass {
	function displayVar(){
		echo "Classe Herdeira\n";
		parent::displayVar();
	}
}
$extended = new ExtendClass();
$extended->displayVar();

?>