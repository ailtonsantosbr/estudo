<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Multiplo de 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<pre>
    <?php
    // tenho duas formas de apresentar um contador até 200.
        // $cont = 2;
        // while($cont <= 200) {
        //     echo "imprimir os valores multiplos de 2: $cont <br>";
        //     $cont +=2;
        // }
        // include('footer.php');

        //utilizando o range e foreach para contador
        $c = range(2,200,2);
        $b = $c;
        foreach($c as $b){
            print_r("imprimir os valores multiplos de 2: " . $b . "<br>");    
        }
        include('footer.php');
    ?>
</pre>    
</body>
</html>