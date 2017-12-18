<?php

function automatas($pinigai, $pavadinimas){
    $prekes = [
        'coca' => 1,
        'mineralinis' => 0.5,
        'traskuciai' => 0.75,
        'sprite' => 1.2
    ];
    if(isset($prekes[$pavadinimas])){         //isset tikrina
        $preke = $prekes[$pavadinimas];
        if($pinigai >= $preke){               // ar prekes iskrenta
            if ($pinigai == $preke){
                echo ('pasiimkite preke');
            }
            else {
                echo 'pasiimkite preke ir graza';
            }
            return $preke;
        }
        else {
            echo 'per mazai pinigu';
            return $pinigai;
        }
    }
    else {
        echo 'nera tokios prekes';
        return $pinigai;
    }
}

// isvedam cola
$preke = automatas(1, 'cola');
