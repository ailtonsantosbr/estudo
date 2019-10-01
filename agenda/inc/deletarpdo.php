<?php

$conn = new PDO("pgsql:host=localhost;port=7432;dbname=postgres;user=postgres;password=postgres");

$id = $_GET['id'];
// var_dump($id);

// echo "confirma a deleção do registro da tabela? digite S para continuar. "; 

echo "<script>
function ConfirmDelete() {
    var x = confirm('Are you sure you want to delete?');
        if (x) {
            return true;
        } else {
            return false;
        }
};

echo <input type='button' onclick='ConfirmDelete()'>;

</script>";

$conf = '';
if(trim($conf) != 'S' or 's') {
    $sql = $conn->prepare("DELETE FROM agenda WHERE id=$id");
    $sql->execute();
    echo "registro deletado da tabela...";
} else {
    echo "manter registro da tabela...";
}
 
$conn = null;
?> 