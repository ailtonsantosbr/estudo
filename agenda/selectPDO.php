<?php

$servername = "localhost";
$username = "postgres";
$pass = "postgres";
$dbname = "postgres";

// solução para receber os parâmetros que seram recebidos
$name = ucfirst($_POST['name']);
$sobr = ucfirst($_POST['sobr']);
$end = ucfirst($_POST['end']);
$cel = $_POST['cel'];
$email = ($_POST['email']);

// inserção de dados no banco POSTGREs
$conn = null;

try { 
    $conn = new PDO("pgsql:host=localhost;port=7432;dbname=postgres;user=postgres;password=postgres");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM agenda WHERE name=$name";

    $conn->exec($sql);
    echo "Pesquisa feita com sucesso!";
} catch (PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
}


?>