<?php
// construção da tabela de dados
echo "<table style='border: solid 1px black; border-radius:3px;'>";
echo "<tr style='background-color:lightgray;'><th class='sorting_asc;'>Nome</th><th>Sobrenome</th><th>Endereço</th><th>Celular</th><th>Email</th><th>Alterar</th><th>Deletar</th></tr>";
// echo "<link rel="stylesheet" href="css/font-awesome.min.css">";
echo "<link rel='stylesheet' href='css/agenda.css'>";
echo "<link rel='stylesheet' herf='css/dataTables.bootstrap.css'>";
// echo "<script type='text/javascript' src='js/dataTables.bootstrap.js'>";
class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current(){
         $table = "<td style='width:150px;border:1px solid black;'>" . parent::current() . "</td>";
        // $table .= "<button type='submit' value='submit'>Alterar</button>";
         return $table;
    }

    function beginChildren(){
        echo"<tr>";
    }

    function endChildren() {
        echo "<td type='submit' value='submit'><a href='#'>Alterar</a></td></tr>" . "\n";
        // echo "<i class="fa fa-pencil-square-o"></i>";
    }
}

// Conexão ao banco de dados
try {
    $conn = new PDO("pgsql:host=localhost;port=7432;dbname=postgres;user=postgres;password=postgres");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $conn->prepare("SELECT * FROM agenda");
    $sql->execute();
    $resultado = $sql->fetchAll();
// var_dump($resultado);
    foreach ($resultado as $valortabela) {
        echo "<tbody><tr>";
        // echo "<td>".$valortabela['id']."</td>";
        echo "<td>".$valortabela['nome']."</td>";
        echo "<td>".$valortabela['sobrenome']."</td>";
        echo "<td>".$valortabela['endereco']."</td>";
        echo "<td>".$valortabela['celular']."</td>";
        echo "<td>".$valortabela['email']."</td>";
        echo "<td>" . "<a href='alterarDados.php?id=". $valortabela['id'] . "'><button class='alterar' type='button'>Alterar</button>" . "</td>" . "</a>";
        echo "<td>" . "<a href='inc/deletarpdo.php?id=" . $valortabela['id'] . "'><button class='deletar' type='button'>Deletar</button>" . "</td>" . "</a>";
        
    }
} catch(PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }    
    $conn = null;
    echo "</table>";

?>

