<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBPDO";

try {
    $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);

    // definindo PDO error exceção
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Cria tabela em SQL
    $sql = "CREATE TABLE form ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, nome VARCHAR(40) NOT NULL, civil VARCHAR(12) NOT NULL, email VARCHAR(40) NOT NULL, data VARCHAR(10) NOT NULL, cpf VARCHAR(14) NOT NULL, celular VARCHAR(15) NOT NULL, profissao VARCHAR(40) NOT NULL, endereco VARCHAR(40) NOT NULL, cidade VARCHAR(30) NOT NULL, estado VARCHAR(30) NOT NULL, sexo VARCHAR(12) NOT NULL)";

    //use exec() because no results are returned
    $conn->exec($sql);
    echo "Base de dados criada com sucesso";
} catch(PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
$conn = null;

include('footer.php');
?>