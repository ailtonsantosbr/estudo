<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contador de 1 ate 100 </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php

    $cont = 1;

    while($cont <= 100 ) {
        echo "O valor impresso:  " . $cont . "<br>";
        $cont++;
    }
?>
</body>
</html>