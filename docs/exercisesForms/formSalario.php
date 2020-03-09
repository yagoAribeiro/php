<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="answer.css" type="text/css">
    <title>Salário</title>
</head>
<body>
    <?php
        $nome = $_POST['nome'];
        $salario = $_POST['salario'];
        $opcao = $_POST['depType'];

        function CalculoAumento($salario, $departamento){
            if ($departamento == 0){
                return ($salario+($salario*0.15));
            }
            if ($departamento == 1){
                if($salario<=1750){
                    return ($salario+($salario*0.12));
                }
                else if($salario>1750 && $salario<=2000){
                    return ($salario+($salario*0.10));
                }
                else if($salario>2000 && $salario<=3000){
                    return ($salario+($salario*0.07));
                }
                else if($salario>3000){
                    return ($salario+($salario*0.05));
                }
            }
        }

        echo ("<p class='resposta'> Olá ".$nome."!<br> Seu salário atual é: ".$salario."<br> com o aumento, seu salário será de: ".number_format(CalculoAumento($salario, $opcao),2,'.',',')."</p><a href = 'salario.php' class='voltar'>Voltar</a>");

    ?>
</body>
</html>