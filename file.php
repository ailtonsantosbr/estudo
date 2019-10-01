<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<form method="POST">
  <input type="text" name="texto" placeholder="Digite o que deseja consultar" />
  <input type="submit" value="Buscar" />
</form>
 
</body>
</html>

<?php
   $arquivo = strtolower(file_get_contents('_texto/ctsmnprd_20190521.txt'));
   $textoBuscar = strtolower($_POST['texto']);
   if(isset($_POST)) {
     if(strpos($arquivo, $textoBuscar) !== FALSE) {
       echo '<h1>Existe a palavra ' . $_POST['texto'] . ' no ctsmnprd_20190521.txt</h1>';
     } else {
       echo '<h1>Não Existe a palavra ' . $_POST['texto'] . ' no ctsmnprd_20190521.txt</h1>';
     }
   }
addcslashes($arquivo, charlist)

?>

