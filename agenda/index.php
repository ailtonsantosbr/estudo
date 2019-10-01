<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> Cadastro </title>
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0' >
        <link rel="stylesheet" href="css/agenda.css">
        <link rel='stylesheet' href='css/dataTables.bootstrap.min.css'>
    </head>
    <body>
        <h1>Cadastro de usuário</h1>

        <p><span>* * *</span> Preencha todos os campos corretamente <span>* * *</span></p>
        <div class="centro">
            <form class="form" action="insertPDO.php" method="post">
                <label>Nome:</label><br>
                <input type="text" name="name" ><br>
                <label>Sobrenome: </label><br>
                <input type="text" name="sobr"><br>
                <label>Endereço: </label><br>
                <input type="text" name="end"><br>
                <label>Celular: </label><br>
                <input type="tel" name="cel" pattern="[0-9]{3}-[0-9]{5}-[0-9]{4}"><br>
                <label>Email: </label><br>
                <input type="email" name="email"><br><br>
                <input class="botao "type="submit" value="Cadastrar"><input class="botao" type="button" value="Alterar"></a>
                <input class="botao" type="button" value="Deletar"> <input class="botao" type="button" value="Consultar">
                <a href='listar.php'><button class="botao" type="button" value="">Listar dados da Agenda</button></a>
            </form>
        </div>
    </body>
</html>