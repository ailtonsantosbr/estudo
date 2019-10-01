<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ler arquivo </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php

$myfile = fopen("CTSMNPRD_20190521.txt", "r") or die("Unable to open file!");

$b = array('ANS8000I');
$num = count($b);
$arrayName[] = fgets($myfile);

print_r($arrayName);
echo fread($myfile,filesize("CTSMNPRD_20190521.TXT"));

for($i=0; $i<$num; ++$i){
    if(in_array($b[$i], $arrayName)){
        foreach($arrayName as $chave => $valor) {
            if ($b[$i] == $valor) {
                $c[$valor] = $chave;

            }
        }
    } else {
        echo "nao encontrado";
    }
}

echo "<pre>";
var_dump($arrayName);
print_r($arrayName);
fclose($myfile);



?>
</body>
</html>


