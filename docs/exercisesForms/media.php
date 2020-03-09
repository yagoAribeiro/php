<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="quests.css" type="text/css">
    <link rel = "stylesheet" href="answer.css" type="text/css">

    <title>Média do aluno</title>
</head>
<body>
<div id="container1">
    <form name="form1" id="form1" method="post" action="formMedia.php">
    <h1 class="title">Calcule a média do aluno</h1>
        <table style="width:100%; height:auto;" id="table1">
            <tr class="line1" style="margin-top:10em;">
                <td><label class="labelType1">Nome do aluno:</label></td>
                <td><input type = "text" placeholder="Insira seu nome completo" class="inputs1" name="nome"></td>
            </tr>
           
            <tr><td><input type = "number" step = "any" placeholder="Insira a primeira nota" class="inputs1" name="nota"></p></td></tr>  
            <tr><td><input type = "number" step = "any" placeholder="Insira a segunda nota" class="inputs1" name="nota2"></p></td> </tr>
            <tr><td><input type = "number" step = "any" placeholder="Insira a terceira nota" class="inputs1" name="nota3"></p></td> </tr>
            <tr><td><input type = "number" step = "any" placeholder="Insira a quarta nota" class="inputs1" name="nota4"></p></td> </tr>
        </table>
        <input type = "submit" value="Enviar" id="btnSubmit"><a href = 'index.php' class='voltar'>Voltar</a>
    </form>

</div>    
</body>
</html>