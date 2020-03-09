<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="quests.css" type="text/css">
    <link rel = "stylesheet" href="answer.css" type="text/css">
    <title>Detran</title>
</head>
<body>
<div id="container1">
    <form name="form1" id="form1" method="post" action="formDetran.php">
    <h1 class="title">Permissão para tirar carteira de motorista</h1>
        <table style="width:100%; height:auto;" id="table1">
            <tr class="line1" style="margin-top:10em;">
                <td><label class="labelType1">Nome:</label></td>
                <td><input type = "text" placeholder="Insira seu nome completo" class="inputs1" name="nome"></td>
            </tr>
            <tr class="line1">
                <td> <label class="labelType1">CPF:</label> </td>
                <td>  <input type = "number" placeholder="Insira seu cpf" class="inputs1" name="cpf"> </td>
            </tr>
            <tr class="line1">
               <td> <label class ="labelType1">Ano de nascimento</label> </td>
               <td> <input type = "number" placeholder="Exemplo: 2002" class="inputs1" name="anoNasc"> </td>
            </tr>
            <tr class="line1">
                <td> <label class ="labelType1">Tipo de documento:</label> </td>  
                <td> 
                    <select class="inputs1" name="docType">
                    <option>A - Carro</option>
                    <option>B - Moto</option>
                    <option>A e B - Carro e Moto</option>
                    <option>C - Transp. Renumerado</option>
                    <option>D - Caminhão</option>
                    <option>E - Ônibus/Mega caminhão</option>
                </select>
                </td>
            </tr>
        </table>
        <input type = "submit" value="Enviar" id="btnSubmit"><a href = "index.php" class='voltar'>Voltar</a>
    </form>

</div>    
</body>
</html>