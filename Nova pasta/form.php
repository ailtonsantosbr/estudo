<?php 

$nome = $_POST["nome"];
$data = $_POST["data"];
$cpf = $_POST["cpf"];
$cel = $_POST["cel"];
$prof = $_POST["prof"];
$end = $_POST["end"];
$dataatual = date("d-m-Y");
$date1 = new DateTime($data);
$date2 = new DateTime($dataatual);
$interval = $date1->diff($date2);

print_r("Nome...: " . $nome . "\n");
print_r("Nascto.: " . date("d-m-Y", $data) . "\n");
print_r("Idade..: " . $interval->y . "anos, " . $interval->m . "meses, " . $interval->d . "dias \n");
print_r("Celular: " . $cel . "\n");
print_r("CPF....: " . $cpf . "\n");
print_r("Profissão: " . $prof . "\n");
print_r("Endereço.: " . $end . "\n");

Copyright &copy 2010-echo date("Y"); - By Ailton Santos

?>

