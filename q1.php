<?php
    function maioresNotas($notas){
        sort($notas);
        $notasMaiores = [$notas[2], $notas[1]];
        return $notasMaiores;
    }  
    
    //use o post

    $notas1 = maioresNotas([7, 5, 2]);
    
    $media = ($notas1[0]+$notas1[1])/2;
    if($media>=7){
        echo "Sua media: ".$media.", situacao: aprovado";
    }
    else{
        echo "Sua media: ".$media.", situacao: reprovado";
    }
    
?>