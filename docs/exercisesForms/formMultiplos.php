<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="answer.css" type="text/css">
    <title>Múltiplos</title>
</head>
<body>
    
</body>
</html>

<?php  
    function ReturnMultiplo($divisor, $numero){
            if($numero%$divisor==0){
                return true;    
        }else{
        return false;
        }
    }

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




    $valor = $_POST['numero'];
    $multiplos = array();


    for($count = 1, $indice = 0; $count<=$valor; $count++){
        if(ReturnMultiplo($count, $valor)){
            $multiplos[$indice] = $count;
            $indice++;
        }
    }
        if(Verificar($valor)){
            print("<p class='resposta'>Este número é primo! </p><br>");
        }
        else{
            print("<p class='resposta'>Este número não é primo! </p><br>");
        }
    print("<p class='resposta'>Os múltiplos deste número são:</p>");
    for($contador = 0; $contador<$indice; $contador++){
        print ("<br><p class='resposta'>".$multiplos[$contador]."</p>");
    }
    print("<a href = 'multiplos.php' class='voltar'>Voltar</a>");





?>