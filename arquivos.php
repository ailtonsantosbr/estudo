<?php

$servername = 'localhost';
$dbname = 'Teste';
$username = 'root';
$password = '';

$arquivo = fopen("Z:\Mobile\estudo\file.php", "r") or die("arquivo não localizado.");
$arquivo1 = fopen('c:\temp\lixo.txt', 'r');
$arquivo2 = fopen('C:\Intel\Logs\IntelControlCenter.log', 'r');
$arquivo3 = fopen('DIRECTORY_SEPARATOR' . 'temp\teste.txt', 'r');

var_dump($arquivo);

while (!feof($arquivo || $arquivo1 || $arquivo2 || $arquivo3)) {
	$linha  = array(fgets($arquivo));
	$linha1 = array(fgets($arquivo1));
	$linha2 = array(fgets($arquivo2));
	$linha3 = array(fgets($arquivo3));
	echo "<br>";
}

// fclose($arquivo);

// CREATE TABLE TD_Texto criando uma tabela com arquivo .txt
try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn = NEW PDO("pgsql:host=localhost;port=7432;dbname=postgres;user=postgres;password=postgres");

	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// sql to create table
	$sql = "CREATE TABLE TD_Texto(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, nome VARCHAR(30) NOT NULL, sobrenome VARCHAR(30) NOT NULL, email VARCHAR(50), dt_nascto VARCHAR(09), celular VARCHAR(15), reg_date TIMESTAMP)";

	// use EXEC() because no results are returned
	$conn->exec($sql);
	echo "Table TD_Texto created successfully";

} catch (PDOException $e) {
	echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

// INSERT TD_Texto insirido dados apartir de um arquivo .txt
try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql = "INSERT INTO TD_Texto(nome, sobrenome, email, dt_nascto, celular) VALUES('$linha')";
	$conn->exec($sql);

} catch(PDOException $e) {
	echo $sql. "<br>" . $e->getMessage();
}

$conn = null;

// SELECT TD_Texto dando um select no banco de dados
try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql = "SELECT nome, sobrenome FROM TD_Texto";
	$conn->exec($sql);

} catch(PDOException $e) {
	echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>