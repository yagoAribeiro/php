<?php
        print("Vetor aleatório:<br>");
        $a = array();
        $b = array();
        for($i=0;$i<10;$i++){
            $random = rand(0,100);
            $a[$i] = $random;
        }
        foreach($a as $variavelTeste){
            print($variavelTeste."<br>");
         }
         print "<br>Inverso:<br>";
            for($i = 0, $c = 9; $i<10; $i++, $c--){
               $b[$i] = $a[$c];
            }
            
        
        foreach($b as $variavelNova){
            print($variavelNova."<br>");
        }


    ?>