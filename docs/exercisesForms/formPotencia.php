<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel = "stylesheet" href="answer.css" type="text/css">
     <title>Potencia</title>
</head>
<body>
     
</body>
</html>
<?php
function Potenciacao($base, $expoente){
       $resultado = 0;
       for ($i = 1; $i < $expoente; $i++){
            $resultado += $base*$base;
       }
       return $resultado;
   }
   print("<p class='resposta'>O resultado é: ".Potenciacao($_POST['base'], $_POST['expoente'])."</p><a href = 'potencia.php' class='voltar'>Voltar</a>");
   
   ?>