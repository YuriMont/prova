<?php
    function funcao1($n1, $n2){
        if($n1>$n2){
            return $n1;
        }
        else{
            return $n2;
        }
    }

    function funcao2($n1, $n2, $n3){
        $maior = 0;
        if($n1>$n2&&$n1>$n3){
           $maior = funcao1($n2, $n3);
           $maior = funcao1($n1, $maior);
        }
        else if($n2>$n1&&$n2>$n3){
            $maior = funcao1($n1, $n3);
            $maior = funcao1($n2, $maior);
         }
         else if($n3>$n2&&$n3>$n1){
            $maior = funcao1($n2, $n1);
            $maior = funcao1($n3, $maior);
         }

         return $maior;
    }
    //use o post

    echo funcao2(9, 4, 0);

?>