<?php   
        function Verif($valor, $valorIgual){
            if($valor == $valorIgual)return true;
              else return false;
        }

        $confirm = false;
        $aleat = rand(0,100);
        print("Número aleatório:<br>");
        print($aleat."<br>");

        print("Vetor aleatório:<br>");
        $a = array();
        for($i=0;$i<10;$i++){
            $random = rand(0,100);
            $a[$i] = $random;
        }
        foreach($a as $variavelTeste){
            print($variavelTeste."<br>");
         }
         for($i=0; $i<10; $i++){
            if(Verif($aleat,$a[$i])){
                $confirm = true;
            break;
            } 
        }
        
       $confirm == true ? print("<br>".$aleat." Está contido no vetor A"): print("<br>".$aleat." Não está contido no vetor A") ;
    

    ?>