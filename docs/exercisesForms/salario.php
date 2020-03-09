<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="quests.css" type="text/css">
    <link rel = "stylesheet" href="answer.css" type="text/css">
    <title>Salário</title>
</head>
<body>
<div id="container1">
    <form name="form1" id="form1" method="post" action="formSalario.php">
    <h1 class="title">Salário e aumento</h1>
        <table style="width:100%; height:auto;" id="table1">
            <tr class="line1" style="margin-top:10em;">
                <td><label class="labelType1">Nome do funcionário:</label></td>
                <td><input type = "text" placeholder="Insira seu nome completo" class="inputs1" name="nome"></td>
            </tr>
           
            <td><label class="labelType1">Salário:</label></td>
            <tr><td><input type = "number" step = "any" placeholder="Insira o salário" class="inputs1" name="salario"></p></td></tr>  
            <tr>
               <td> <select class="inputs1" name="depType">
                <option value = '0'>Departamento operacional</option>
                <option value = '1'>Departamento de desenvolvimento</option>
            </select>
               </td>
            </tr>
        </table>
        <input type = "submit" value="Enviar" id="btnSubmit"><a href = 'index.php' class='voltar'>Voltar</a>
    </form>

</div>    
</body>
</html>