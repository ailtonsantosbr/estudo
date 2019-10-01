<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Abre arquivo PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<?php
   $t = fopen('c:\xampp\htdocs\estudo\data.txt', 'r');
    
   for ($date=1; $date <= 31; $date++) { 
       fwrite($t, $date . " de Janeiro de 2018 \n" );
   }

   include 'footer.php';

?>

</body>
</html>
