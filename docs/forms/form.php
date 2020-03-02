<?php 
  $nome = $_GET['nome'];
  $cpf = $_GET['cpf'];
  $ano = $_GET['anoNasc'];
  $tipo = $_GET['docType'];
    
$idade = 2020 - $ano;
if($idade < 18){
    print("Você não pode fazer sua carteira ainda!")
}
?>
<