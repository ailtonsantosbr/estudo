<?php 

$id = $_POST['id'];
$name = $_POST['name'];
$sobr = $_POST['sobr'];
$end = $_POST['end'];
$cel = $_POST['cel'];
$email = $_POST['email'];

var_dump($_REQUEST);
// die();

$conn = new PDO("pgsql:host=localhost;port=7432;dbname=postgres;user=postgres;password=postgres");
$sql = "UPDATE agenda SET id='$id', nome='$name', sobrenome='$sobr', endereco='$end', celular='$cel', email='$email'  WHERE id=$id";
// $ord = "SELECT nome FROM agenda ORDER BY asc";
$stmt = $conn->prepare($sql);
$stmt->execute();
// $ord->execute();

echo $stmt->rowCount() . " registro atualizado com sucesso.";

?>