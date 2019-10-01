
<?php
$n1 = 10;
$n2 = 20;
$s = $n1 + $n2;
echo "Soma de $n1 + $n2 = $s";
echo "Divisao de n1 / n2" ($n1/$n2);
echo "Subtração de $n1 - $n2" ($n1-$n2);
echo "Multiplicacao de $n1 * $n2" ($n1 * $n2);
echo $n1-$n2 / $sn1 * $n2;
echo round($n1) . round($n2);
echo pow($n1, $n2);
ceil ($n1);
floor ($s);
echo $s=($n1*$n2) . round($s);
ceil($s);
intval($n2);
echo intval($n1);
echo "<br/> O valor de $n1 em moeda e R$ " . number_format($n1,2,",", ".");

var_dump((int) $n2/$n1);
var_dump((float) $n1-$n2);
var_dump((int) . (int) 45+12);

$large_number = 9223372036854775807;
var_dump($large_number);

$large_number = 9223372036854775808;
var_dump($large_number);

$million = 1000000;
$large_number = 50000000000000000 * $million;
var_dump($large_number);
?>

<?php
$a = 1.23456789;
$b = 1.23456780;
$epsilon = 0.000001;

if (abs($a-@b) < $epsilon) {
	echo 'iguais';
}
?>

<?php
$juice = "apple";

echo "He drank some $juice juice." .PHP_EOL;
//Invalid. "s" is a valid character for a variable name, but the variable
echo "He drank some juice made of $juices.";
//valid.
echo "He drank some juice made of ${juice}s." .PDO::__construct;
?>

<?php echo 'se voce quer servir documentos XHTML ou XML,
			escreva assim';
?>

<?php
$a_bool = TRUE;   // um booleano
$a_str  = "foo";  // uma string
$a_str2 = 'foo';  // uma string
$an_int = 12;     // um inteiro

echo gettype($a_bool); // mostra:  boolean
echo gettype($a_str);  // mostra:  string

// Se ele é um inteiro, incrementa-o com quatro
if (is_int($an_int)) {
    $an_int += 4;
}

// Se $bool é uma string, mostre-a
// (não imprime nada)
if (is_string($a_bool)) {
    echo "String: $a_bool";
}
?>

<?php
// == E um operador que testa
// igualdade e retorna um booleano.
if ($action == "mostrar_versao") {
	echo "a versao e 1.23";
}

// isto nao e necessario...
if ($exibir_separadores == true) {
	echo "<hr>\n";
}
// ... porque voce pode simplesmente escrever isso:
if ($exibir_separadores) {
	echo "<hr>\n";
}
?>

<?php
$str = <<<EOD;
Exemplo de uma string
distribuida em varias linhas
utilizando a sintaxe heredoc.
EOD;

/* Exemplo mais complexo, com variaveis */
class foo {
	var $foo;
	var $bar;

	function foo() {
		$this->foo = 'Foo';
		$this->bar = array('Bar1', 'Bar2', 'Bar3');
	}
}

$foo = new foo();
$name = 'Meu nome';

echo <<<EOT;
Meu nome é "$name". Eu estou imprimindo $foo->foo.
Agora, eu estou imprimindo {$foo->bar[1]}.
Isto deve imprimir um 'A' maisculo: \x41

EOT;
?>

<?php
var_dump(array(<<<EOD;
foobar!
EOD
));
?>

<?php
//start variables
function foo()
{
	static $bar = <<<LABEL;
	nothing in here...
LABEL;
}

//Class properties / constants
class foo {
	const BAR = <<<FOOBAR;
	constant example
FOOBAR;

	public $baz = <<<FOOBAR;
	property example
FOOBAR;
}
?>

<?php
$juices = array("apple", "orange", "koolaid1" => "purple");

echo "He drank some $juices[0] juice.".PHP_EOL;
echo "He drank some $juices[1] juice.".PHP_EOL;
echo "He drank some $juices[koolaid1] juice.".PHP_EOL;

class people {
	public $john = "John Smith";
	public $jane = "Jane Smith";
	public $Robert = "Robert Paulsen";
	public $smith = "Smith";
}

$people = new people();

echo "$people->john drank some $juices[0] juice.".PHP_EOL;
echo "$people->john the said hello to $people->jane.".PHP_EOL;
echo "$people->john's wife greeted $people->robert.".PHP_EOL;
echo "$people->robert greeted the two $people->smiths."; //Won´t work
?>

<?php
//show all errors
error_reporting(E_ALL);
$GREAT = 'fantastic';

//Won´t work, outputs: this is {fantastic}
echo "this is {$great}";

//Works, outputs: this is fantastic
echo "This is {$great}";

//Works
echo "This square is {$square->width}00 centimeters broad.";

//Works
echo "this works: {$arr['key']}";

//Works
echo "this works: {$arr[4][3]}";

//This is wrong for the same reason as $foo[bar] is wrong outside a string.
//In other words, it will still work, but only because PHP frst looks for a
//constant named foo; an error of level E_NOTICE (undefined constant) will because
// thrown.
echo "this is wrong: {$arr[foo][3]]}";

// Works. When using multi-dimensional arrays, always use braces around arrays
// when inside of strings
echo "This works: {$arr['foo'][3]}";

// Works.
echo "This works: " . $arr['foo'][3];

echo "This works too: {$obj->values[3]->name}";

echo "This is the value of the var named $name: {${$name}}";

echo "This is the value of the var named by the return value of getName(): {${getName()}}";

echo "This is the value of the var named by the return value of \$object->getName(): {${$object->getName()}}";

// Won't work, outputs: This is the return value of getName(): {getName()}
echo "This is the return value of getName(): {getName()}";
?>

<?php

class foo {
	var $bar = 'I am bar.';
}

$foo = new foo();
$bar = 'bar';
$baz = array('foo', 'bar', 'baz', 'quux');
echo "{$foo->$bar}\n";
echo "{$foo->{$baz[1]}}\n";
?>

<?php
// show all erros.
error_reporting(E_ALL);

class beers {
	const softdrink = 'rootbeer';
	public static $ale = 'ipa';
}

$rootbeer = 'A & W';
$ipa = 'Alexander Keith\'s';

//This works; outputs: I'd like an A & W
echo "I'd like an {${beers::softdrink}}\n";

//This works too; outputs: I'd like an Alexander Keith's 
echo "I'd  like an {${beers::$ale}}\n";
?>

<?php
// Get the first character of a string
$str = 'This is a test.';
$first = $str[0];

//Get the third character of a string
$third = $str[2];

//Get the last character of a string.
$str = 'This is still a test.';
$last = $str[strlen($str)-1];

//Modify the last character of a string
$str = 'Look at the sea';
$str[strlen($str)-1] = 'e';
?>

<?php
$str = 'abc';

var_dump($str['1']);
var_dump(isset($str['1']));

var_dump($str['1.0']);
var_dump(isset($str['1.0']));

var_dump($str['x']);
var_dump(isset($str['x']));

var_dump($str['1x']);
var_dump(isset($str['1x']));
?>

// Um array simples

<?php
$array = array(
	"foo" => "bar",
	"bar" => "foo",
);

//a partir do PHP 5.4
$array = [
	"foo" => "bar",
	"bar" => "foo",
];
?>

<?php
$array = array(
	1	=> "a",
	"1"	=> "b",
	1.5 => "c",
	true=> "d",
);
var_dump($array);

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);

date_default_timezone_set("america/new_york");
echo "The time is " . date("h:i:sa");


include('footer.php');
?>



