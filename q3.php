<?php
    function fatorial($n){
        $fat = 1;
        for($i=1;$i<=$n;$i++){
            $fat *= $i;
        }
        return $fat;
    }

    //use o post
    $s = 5;
    for($i=1;$i<$s;$i++){
        $s += $i/fatorial($i);
    }
    echo $s;


?>