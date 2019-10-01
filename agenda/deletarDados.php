<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> Deletar Dados </title>
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0' >
        <link rel="stylesheet" href="css/agenda.css">
    </head>
    <body>
        <h1>Deleção de dados do usuário</h1>

        <p><span>*</span>Excluir usuário</p>
    <div class="centro">
        <form class= 'form'action="insertPDO.php" method="post">
            <label>Nome: </label><br>
            <input type="text" name="name"><br>
            <label>Sobrenome: </label><br>
            <input type="text" name="sobr"><br>
            <label>Endereço: </label><br>
            <input type="text" name="end"><br>
            <label>Celular: </label><br>
            <input type="tel" name="cel" pattern="[0-9]{3}-[0-9]{5}-[0-9]{4}"><br>
            <label>Email: </label><br>
            <input type="email" name="email"><br><br>
            <input class="botao" type="button" value="Excluir">
            <a href='listar.php' ><input class="botao" type="button" name="listar.php" value="Listar dados da Agenda" ></a>
            
        </form>
    </div>    

<?php

?>
</body>
</html>