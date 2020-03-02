<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detran</title>
</head>
<body>
<container id="container1">
    <form name = "form1" id = "form1" method="get" action="form.php">
    <h1 class="title">Permissão para tirar carteira Detran</h1>
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
        <input type = "submit" value="Enviar" id="btnSubmit">
    </form>
    <style>
        body{
            background-color:aliceblue;
        }
        #container1{
            width:100%;
            position:relative;
        }
        #form1 .title{
            font-size:30px;
            color:aliceblue;
        }
        #form1{
            position:relative;
            width:40%;
            height:25em;
            background-color:black;
            background-attachment:no-repeat;
            background-size:100%;
            border-style:inset;
            border-width:4px;
            border-color:blue;
            margin-left:auto;
            margin-right:auto;
        }
        #form1 .labelType1{
            margin-top:2em;
            font-size:20px;
            color: white;
            font-family:arial;
        }
        #form1 .inputs1{
            color:aliceblue;
            background-color:black;
            border-style:groove;
            border-width:3px;
            border-color:aliceblue;
            width: 80%;
            height: 30px;
        }
        #form1 #table1{
            border-style:inset;
            border-width:4px;
            border-color:aliceblue; 
        }
        #form1 #btnSubmit{
            position:relative;
            left:30%;
            right:30%;
            width:40%;
            height:2em;
            margin-top:5em;
            border-style:inset;
            border-width:2px;
            border-color:aliceblue; 
        }

    </style>
</container>    
</body>
</html>