<html>
  <head><title>FormDetran</title>
  <link rel = "stylesheet" href="answer.css" type="text/css">
</head>
  <body>
      <h1>Formulário Detran</h1>

      <?php 
         $nome = $_POST['nome'];
         $cpf = $_POST['cpf'];
         $ano = $_POST['anoNasc'];
         $tipo = $_POST['docType'];
      
         
        $idade = 2020 - $ano;
        print("<p class='resposta'> Nome: ".$nome."<br> CPF: ".$cpf."<br> Ano: ".$ano."<br> Tipo: ".$tipo."<br></p>");
   
        if($idade < 18){
         echo "<p class='resposta'>Você não pode fazer sua carteira ainda!</p><a href = 'detran.php' class='voltar'>Voltar</a>";
        }else{
          echo "<p class='resposta'>Você já pode tirar sua carteira de motorista!</p><a href = 'detran.php' class='voltar'>Voltar</a>";
        }
        ?>
  </body>
</html>