<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ler arquivo e colocar novos dados</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        include('header.php');
        
         // $handle  = fopen("C:\\xampp\htdocs\Estudo\simtc_201904181655.TXT", "w+");
    
        // while ($linha = fgets($handle)) {
        //     echo $linha . "<br>";
        // }
        // $txt = fwrite($handle, "Texto para teste");


        // melhorando codigo de abertura de arquivo com FOPEN();
        $txt = "";
        $i = 0;
        $min = 1;
        $max = 150;
        $myfile = fopen("simtc_201904181655.txt", "a") or die("Unable to open file!");
        echo fread($myfile,filesize("simtc_201904181655.TXT"));
               
        while ($i <= 10){
            fwrite($myfile, $txt);
            $txt = date('d-m-Y H:i:s') . ";7;" . rand() . ";" . rand($min, $max) . "\n";
            $i++;
        }

        // fwrite($myfile, $txt);s
        // $txt = "2019-04-18 16:55:55;7;1360;66770\n";
        // fwrite($myfile, $txt);
        // $txt = "2019-04-18 16:55:55;7;1360;66771\n";
        // fwrite($myfile, $txt);

        // var_dump($myfile);
        fclose($myfile);    

        include('footer.php');
    ?>
</body>
</html>