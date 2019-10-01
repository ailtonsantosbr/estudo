<?php
echo "<link rel='stylesheet' href='css/agenda.css'>";

// login no banco de dados PostgreSQL
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

if (empty($name && $sobr && $end && $cel && $email)) {
    echo "<span>* * * </span>Preencher todos os campos <span>* * * </span>" . "<br>";
} else {
    echo "<span>* * * </span>Todos os campos preenchidos <span>* * * </span>" . "<br>";
}

// inserção de dados no banco POSTGREs
try {
    $conn = NEW PDO("pgsql:host=localhost;port=7432;dbname=postgres;user=postgres;password=postgres");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $conn->query("SELECT count(*) as count FROM agenda where nome='$name' and sobrenome='$sobr'or email='$email'");
    $linha = $sql->fetch(PDO::FETCH_ASSOC);
    // while ($linha = $sql->fetch(PDO::FETCH_OBJ)) {
    //     var_dump($name);
    //     var_dump($sobr);
        if($linha['count'] <> 0) {
            echo "Usuário ou email já cadastrado." . "<br>";
        } else {
            echo "Usuário será cadastrado!!" . "<br>";
            $sql = "INSERT INTO agenda(Nome, Sobrenome, Endereco, Celular, Email) VALUES ('$name', '$sobr', '$end', '$cel', '$email')";
            $conn->exec($sql);
            echo "Novo cadastro na tabela." . "<br>";
            exit;
        }
        // var_dump($linha);
    //     // echo '<br>';
    // }
    $sql->execute();

} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
    var_dump($sql);
}

$conn = null;

?>