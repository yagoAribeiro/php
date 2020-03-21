<?php
        print("Vetor aleatório:<br>");
        $a = array();
        for($i=0;$i<10;$i++){
            $random = rand(0,100);
            $a[$i] = $random;
        }
        foreach($a as $variavelTeste){
            print($variavelTeste."<br>");
         }
         print "<br>Decrescente:<br>";
        for($i=0;$i<10;$i++){
            for($c=$i;$c<10;$c++){
                if($a[$i]<$a[$c]){
                    //x é a váriavel que irá armazenar o maior valor caso a condição acima seja verdadeira
                    $x = $a[$c];
                    //O vetor para a posição do valor de $c receberá o valor da posição de $i (Ou seja, irá inverter)
                    $a[$c] = $a[$i];
                    //O vetor para a posição que está sendo comparada irá receber o valor de $x ($x armazenou o menor valor)
                    $a[$i] = $x;
                    //Caso a condição seja falsa, não faça nada!
                }
            }
            
        }
        foreach($a as $variavelNova){
            print($variavelNova."<br>");
        }


    ?>
