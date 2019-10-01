<<!DOCTYPE html>
<html>
<head>
	<title> Testando PHPinfo() </title>
</head>
<body>

<?php

// Mostra todas as informações, usa o padrão INFO_ALL
phpinfo();

// Mostra apenas informações dos módulos.
// phpinfo(8) mostra um resultado identico.
phpinfo(INFO_MODULES);

?>

</body>
</html>

<<!DOCTYPE html>
<html>
<head>
	<title>Exemplo </title>
</head>
<body>

<?PHP 
	echo "Olá, eu sou um script PHP";
	phpinfo();
?>
<?php
echo $_SERVER['HTTP_USER_AGENT'];
?>

</body>
</html>
