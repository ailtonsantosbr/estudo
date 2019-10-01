<?php

$id = $_GET['id'];

// var_dump($id);

$conn = new PDO("pgsql:host=localhost;port=7432;dbname=postgres;user=postgres;password=postgres");
$sql = $conn->prepare("SELECT * FROM agenda WHERE id=$id");
$sql->execute();
$resultado = $sql->fetchAll();
foreach ($resultado as $valortabela) {
    $id = $valortabela['id'];
    $nome = $valortabela['nome'];
    $sobr = $valortabela['sobrenome'];
    $end = $valortabela['endereco'];
    $cel = $valortabela['celular'];
    $email = $valortabela['email'];
}

// var_dump($id); var_dump($nome); var_dump($sobr);

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> Alterar Dados </title>
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0' >
        <link rel="stylesheet" href="css/agenda.css">
    </head>
<body>
    <h1>Alteração de dados do usuário</h1>

    <p><span>* * *</span> Altere os campos <span>* * *</span></p>
    <div class="centro">
        <form class="form" action="updatePDO.php" method="post">
            <label> Id.: </label> <br>
            <input type="text" name="id" class="id" value="<?php echo $id ?>"><br>
            <label> Nome: </label> <br>
            <input type="text" name="name" value="<?php echo $nome ?>"><br>
            <label> Sobrenome: </label><br>
            <input type="text" name="sobr" value="<?php echo $sobr ?>"><br>
            <label> Endereço: </label><br>
            <input type="text" name="end" value="<?php echo $end ?>"><br>
            <label> Celular: </label><br>
            <input type="tel" name="cel" value="<?php echo $cel ?>" pattern="[0-9]{3}-[0-9]{5}-[0-9]{4}"><br>
            <label> Email: </label><br>
            <input type="email" name="email" value="<?php echo $email ?>"><br><br>
            <button class="botao" type="submit" value="">Alterar</button>
            <a href="listar.php"><button class="botao" type="button" value="">Listar dados da Agenda</button></a>
        </form>
    </div>
        
</body>
</html>
