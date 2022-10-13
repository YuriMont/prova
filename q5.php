<?php
    $chico = 1.5;
    $juca  = 1.1;
    $anos = 0;
    while($juca<$chico){
        $juca += 0.03;
        $chico += 0.02;
        $anos++;
    }
    echo $anos;
?>