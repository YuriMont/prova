<?php
    function maioresNotas($notas){
        sort($notas);
        $notasMaiores = [$notas[2], $notas[1]];
        return $notasMaiores;
    }  
    
    //use o post

    $notas1 = maioresNotas([7, 5, 2]);
    $notas2 = maioresNotas([3, 10, 4]);
    $notas3 = maioresNotas([8, 9, 8]);
    
    $media = ($notas1[0]+$notas1[1]+$notas2[0]+$notas2[1]+$notas3[0]+$notas3[1])/6;
    if($media>=7){
        echo "Sua media: ".$media.", situacao: aprovado";
    }
    else{
        echo "Sua media: ".$media.", situacao: reprovado";
    }
    
?>