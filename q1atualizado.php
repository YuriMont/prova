<?php

function maioresNotas($n1, $n2, $n3){
    $maior = 0;
    $segundo = 0;
    if($n1>=$n2&&$n1>=$n3){
        $maior = $n1;
    }
    else if($n2>=$n1&&$n2>=$n3){
        $maior = $n2;
    }
    else if($n3>=$n1&&$n3>=$n2){
        $maior = $n3;
    }
    
    if($maior == $n1){
        if($n2>$n3){
            $segundo = $n2;
        }
        else{
            $segundo = $n3;
        }
    }
    else if($maior == $n2){
        if($n1>$n3){
            $segundo = $n1;
        }
        else{
            $segundo = $n3;
        }
    }
    else if($maior == $n3){
        if($n2>$n1){
            $segundo = $n2;
        }
        else{
            $segundo = $n1;
        }
    }
    
    $maiores = [$maior, $segundo];
    return $maiores;
}

    $notas1 = maioresNotas(7, 5, 2);
    $notas2 = maioresNotas(3, 10, 4);
    $notas3 = maioresNotas(8, 9, 8);
    
    $media = ($notas1[0]+$notas1[1]+$notas2[0]+$notas2[1]+$notas3[0]+$notas3[1])/6;
    if($media>=7){
        echo "Sua media: ".$media.", situacao: aprovado";
    }
    else{
        echo "Sua media: ".$media.", situacao: reprovado";
    }

?>