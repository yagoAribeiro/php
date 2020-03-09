<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="answer.css" type="text/css">
    <title>Fibonnaci</title>
</head>
<body>
    <?php 
        $numero = $_POST['numero'];
        $result = 1;
        $count = 0;
        print("<p class='resposta'>A sequência de fibonacci até o número ".$numero." é: </p><br><a href = 'fibonacci.php' class='voltar'>Voltar</a>");
        while($count<$numero){
            if($result >= $numero || $count >= $numero){
            break;
            }
            $result = $count+$result;
            print("<p class='resposta'>".$result." </p>");
            $count = $result + $count ;
            print("<p class='resposta'>".$count." </p>");
        }
    
    ?>
</body>
</html>