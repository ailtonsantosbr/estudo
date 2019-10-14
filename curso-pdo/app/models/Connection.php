<?php  

namespace app\models;

Class Connection {

	public static function connect() {
		$pdo = new PDO("mysql:host=$hostname; dbname=curso_pdo; charset=utf8", "root", "root");
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pdo->setAttribute(PDO::ATTR_) 
	}
}

?>