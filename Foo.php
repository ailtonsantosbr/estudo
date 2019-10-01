<?php  
class Foo {
	public static function aStaticMethod() {
		//...
	}
}

Foo::aStaticMethod();
$classname = 'Foo';
$classname::aStaticMethod();

?>

#############################################################################

<?php  

class Foo {
	public static $my_




}

?>

#############################################################################

<?php  
class Foo {
	function MetodoVariavel() {
		$name = 'Bar';
		$this->$name(); // isto chama o metodo Bar()
	}

	function Bar() {
		echo "Bar foi chamada";
	}
}

$foo = new Foo();
$funcname = "MetodoVariavel";
$foo->$funcname(); // Isto chama $foo->MetodoVariavel()

?>

#############################################################################

<?php  

class Foo {
	static $variable = 'static property';
	static function Variable() {
		echo "Method variable called";
	}
}

echo Foo::$variable;

$variable = 'Variable';

Foo::$variable();

?>

#############################################################################

<?php  

class Foo {
	static function bar() {
		echo "bar\n";
	}

	function baz() {
		echo "baz\n";
	}
}

$func = array("Foo", "bar");
$func();
$func = array(new Foo, "baz");
$func();
$func = "Foo::bar";
$func();

?>

#############################################################################

<?php  
array_diff_assoc(array1, array2);
array_diff_key(array1, array2)
array_diff_uassoc(array1, array2)
array()
array_intersect(array1, array2)
array_intersect_assoc(array1, array2)
array_intersect_key(array1, array2)
array_intersect_uassoc(array1, array2)
array_intersect_ukey(array1, array2)
array_map(callback, arr1)
array_merge(array1)
array_merge_recursive(array1)
array_multisort(arr)
array_push(array, var)
array_replace(array, array1)
array_replace_recursive(array, array1)
array_reduce(input, function)
array_product(array)
array_pad(input, pad_size, pad_value)
array_rand(input)
call_user_func(function)
call_user_method(method_name, obj)
call_user_method_array(method_name, obj, params)
compact()
dba_open()
dba_popen()
echo()
forward_static_call()
fprintf()
fscanf()
httprequestpool_construct()
ibase_execute()
ibase_set_event_handler()
ibase_wait_event()
isset()
list()
maxdb_stmt_bind_param()
maxdb_stmt_bind_result()
mb_convert_variables()
newt_checkbox_tree_add_item()
newt_grid_h_close_stacked()
newt_grid_h_stacked()
newt_grid_v_close_stacked()
newt_grid_v_stacked()
newt_win_choice()
newt_win_entries()
newt_win_menu()
newt_win_message()
newt_win_ternary()
pack()
printf()
register_shutdown_function()
register_tick_function()
session_register()
setlocale()
sprintf()
sscanf()
unset()
var_dump()
w32api_deftype()
w32api_init_dtype()
w32api_invoke_function()
wddx_add_vars()
wddx_serialize_vars()


?>

##########################################################################

<?php  
namespace Project\TestClass;
class Test {
	static function funcToCall(){
		return "test";
	}
}

?>

You must call it as:

<?php  
namespace Project\OtherTestClass;
class OtherTest {
	static function callOtherFunc(){
		$func = '\Project\TestClass::funcToCall';
		$func();
	}
}

?>

and not:

<?php  
class OtherTest {
	static function callOtherFunc(){
		$func = 'TestClas::funcToCall';
		$func();
	}
}

?>

##########################################################################

<?php  
class A {

	protected $a;
	protected $c;

	function __construct() {
		$this->a = array('self', 'a');
		$this->c = array('self', 'c');
	}

	static function a($name, &$value){
		echo $name, ' => ' , $value++,"\n";
	}

	function b($name, &$value) {
		call_user_func_array($this->a, array($name, &$value));
	}

	static function c($str) {
		echo $str,"\n";
	}

	function d() {
		call_user_func_array($this->c, func_get_args());
	}

	function e() {
		call_user_func($this->c, func_get_arg(0));
	}
}

class B extends A {

	function __construct() {
		$this->a = array('parent', 'a');
		$this->c = array('self', 'c');
	}

	static function c() {
		print_r(func_get_args());
	} 

	function d() {
		call_user_func_array($this->c, func_get_args());
	}

	function e() {
		call_user_func_array($this->c, func_get_args());
	}
}

$a =& new A;
$b =& new B;
$i = 0;

A::a('index', $i);
$a->b('index', $i);

$a->c('string');
$a->d('string');
$a->e('string');









?>

##########################################################################

<?php  





?>




