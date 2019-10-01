<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php
    $nome = $_REQUEST["nome"];
    $data = $_REQUEST["data"];
    $cpf = $_REQUEST["cpf"];
    $cel = $_REQUEST["celular"];
    $prof = $_REQUEST["profissao"];
    $dataatual = date("d-m-Y");
    $date1 = new DateTime($data);
    $date2 = new DateTime($dataatual);
    $interval = date_diff($date1, $date2);
    
    print_r("Nome.: " . ucwords($nome) . "<br>");
    print_r("Nasc.: " . date("d-m-Y", strtotime($data."00:00:00")) . "<br>");
    print_r("Idade: " . $interval->y . " anos, " . $interval->m . " meses, ". $interval->d ." dias <br>");
    print_r("CPF..: " . $cpf . "<br>");
    print_r("Celular: " . $cel . "<br>");
    print_r("Profissão: " . $prof .  "<br>");

    include('footer.php');
?>
</body>
</html>