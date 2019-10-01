<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Le arquivo txt</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<div>
<pre>

<?php

    $handle  = fopen("C:\\xampp\htdocs\Estudo\simtc_201904181655.TXT", "a");
    while ($linha = fgets($handle)) {
        echo $linha . "<br>";
   }

    include('footer.php');

?>

</pre>
</div>
</body>
</html>