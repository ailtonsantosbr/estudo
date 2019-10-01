<?php

$nome = $_POST["nome"];
$civil = $_POST["civil"];
$email = $_POST["email"];
$data = $_POST["data"];
$dia = substr($data,0,2);
$mes = substr($data,2,2);
$ano = substr($data,4,4);
$data = $dia."-".$mes."-".$ano;
$cpf = $_POST["cpf"];
$cel = $_POST["cel"];
$prof = $_POST["prof"];
$end = $_POST["end"];
$cid = $_POST["cidade"];
$est = $_POST["estado"];
$sexo = $_POST["genero"];
$dataatual = date("d-m-Y");
$date1 = new DateTime($data);
// $date1 = DateTime::createFromFormat('d-m-Y', trim($_POST['data']));
$date1->format('d-m-Y H:i:s');
$date2 = new DateTime($dataatual);
$interval = date_diff($date1,$date2);

// habilita o display error
ini_set('display_erros', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);

// campo nome caso esteja em branco
if ((isset($_POST['nome']))&&(!empty($_POST['nome']))) {

// conexao com o banco de dados
$conexao = mysqli_connect("localhost", "root", "", "mydbpdo") or die("erro na conexao com banco de dados");

// inserção de dados na tabela form
$string_sql = "INSERT INTO form (nome,civil,email,data,cpf,celular,profissao,endereco,cidade,estado,sexo) VALUES('$nome', '$civil', '$email', '$data', '$cpf', '$cel', '$prof', '$end', '$cid', '$est', '$sexo')";
$insert_member_res = mysqli_query($conexao, $string_sql);

if(mysqli_affected_rows($conexao)>0) {
    echo "<p><h3> Registro efeutuado com sucesso </h3></p>";
    echo "<a href=form.html><h3> Volta ao formulario de Cadastro </h3></a>";
} else {
    echo "Erro, nao foi possivel inserir os dados na tabela form <br>";
    echo var_dump($string_sql) . "<br>";
}
mysqli_close($conexao);
} else {
    echo "Por favor, preencha os dados, ";
}

// imprime os dados recebidos.
print_r("Nome...: " . ucwords($nome) . "<br>");
print_r("Civil..: " . $civil . "<br>");
print_r("email..: " . $email . "<br>");
print_r("Nascto.: " . date("d-m-Y", strtotime($data."00:00:00")) . "<br>");
print_r("Idade..: " . $interval->y . " anos, " . $interval->m . " meses, " . $interval->d . " dias <br>");
print_r("Celular: " . $cel . "<br>");
print_r("CPF....: " . $cpf . "<br>");
print_r("Profissão: " . ucwords($prof) . "<br>");
print_r("Endereço.: " . ucwords($end) . "<br>");
print_r("Cidade..: " . ucwords($cid) . "<br>");
print_r("Estado..: " . ucwords($est) . "<br>");
print_r("Sexo...: " . ucfirst($sexo) . "<br>");

if ($interval->y >= 18) {
    print "Você pode votar!!";
} else {
    print "Você não pode votar ainda!!";
}

include('footer.php');

?>
