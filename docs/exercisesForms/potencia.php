<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="quests.css" type="text/css">
    <link rel = "stylesheet" href="answer.css" type="text/css">
    <title>Potência</title>
</head>
<body>
<div id="container1">
    <form name="form1" id="form1" method="post" action="formPotencia.php">
    <h1 class="title">Potência</h1>
        <table style="width:100%; height:auto;" id="table1">
            <tr class="line1" style="margin-top:10em;">
                <td><label class="labelType1">Base:</label></td>
                <td><input type = "number" placeholder="Insira a base" class="inputs1" name="base"></td>
            </tr>
            <tr class="line1" style="margin-top:10em;">
                <td><label class="labelType1">Expoente:</label></td>
                <td><input type = "number" placeholder="Insira o expoente" class="inputs1" name="expoente"></td>
            </tr>
        </table>
        <input type = "submit" value="Enviar" id="btnSubmit"><a href = 'index.php' class='voltar'>Voltar</a>
    </form>

</div>    

<?php 
/*
   function Potenciacao($base, $expoente){
       $resultado = 0;
       for ($i = 1; $i < $expoente; $i++){
            $resultado += $base*$base;
       }
       return $resultado;
   }
   print("O resultado é: ".Potenciacao($_POST['base'], $_POST['expoente']));
*/
?>
</body>
</html>