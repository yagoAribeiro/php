<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="answer.css" type="text/css">
    <title>Média do aluno</title>
</head>
<body>
    <?php
        $nome = $_POST['nome'];
        $num1 = $_POST['nota'];
        $num2 = $_POST['nota2'];
        $num3 = $_POST['nota3'];
        $num4 = $_POST['nota4'];

        function CalculoMedia($valor_1, $valor_2, $valor_3, $valor_4){
            return (($valor_1 + $valor_2 + $valor_3 + $valor_4)/4);
        }
        $textAprov;

        function AproveTexto($valor){
            if($valor <= 4.9){
                return "Aluno retido!";
            }
            else if($valor > 4.9 && $valor <= 6.9){
                return "Aluno em exame!";
            }
            else if($valor > 6.9){
                return "Aluno promovido!";
            }
        }
        $textAprov = aproveTexto(CalculoMedia($num1, $num2, $num3, $num4));
        $media = CalculoMedia($num1, $num2, $num3, $num4);


        echo ("<p class='resposta'>Olá ".$nome."<br> A sua média é: ".number_format($media, 2, ".", ',')."<br>".$textAprov."</p><a href = 'media.php' class='voltar'>Voltar</a>");
        
    ?>
</body>
</html>