<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="answer.css" type="text/css">
    <title>Primos</title>
</head>
<body>
    
</body>
</html>
<?php
    function Verificar($numero){
        for ($i = 1, $c = 0; $i<=$numero; $i++){
         if($numero % $i == 0){
            $c++;
         }if($c > 2){
             return false;
         break;
         }
    }
 return true;
    }

    if(Verificar($_POST['numero']) == false){
        print ("<p class='resposta'>".$_POST['numero']." Não é um número primo!</p> <a href = 'primo.php' class='voltar'>Voltar</a>");
    }else{
        print ("<p class='resposta'>".$_POST['numero']." É um número primo!</p> <a href = 'primo.php' class='voltar'>Voltar</a>");
    }

?>