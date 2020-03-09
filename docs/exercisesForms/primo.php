<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="quests.css" type="text/css">
    <link rel = "stylesheet" href="answer.css" type="text/css">
    <title>Número</title>
</head>
<body>
<div id="container1">
    <form name="form1" id="form1" method="post" action="formPrimo.php">
    <h1 class="title">Número primo</h1>
        <table style="width:100%; height:auto;" id="table1">
            <tr class="line1" style="margin-top:10em;">
                <td><label class="labelType1">Número:</label></td>
                <td><input type = "number" placeholder="Digite um número:" class="inputs1" name="numero"></td>
                <td><label class="labelType1">Número primo é aquele que só é divisivel por 1 e ele mesmo.</label></td>
            </tr>
        </table>
        <input type = "submit" value="Enviar" id="btnSubmit"><a href = 'index.php' class='voltar'>Voltar</a>
    </form>

</div>    
</body>
</html>