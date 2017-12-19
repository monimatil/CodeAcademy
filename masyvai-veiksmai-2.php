<?php

$m = [1,3,6,2,10,12,44];
//1.
function vidurkis($mas){
    $sum = 0;
    for ($i = 0; $i < count($mas); $i++) $sum += $mas[$i];
    return $sum / count($mas);             // count duoda elementu masyve kiekio
}
echo vidurkis($m) . '<br>';
//2.
function prideti($mas, $skaicius){
    for ($i = 0; $i < count($mas); $i++) $mas[$i] = $mas[$i] + $skaicius;
    return $mas;
}
echo json_encode(prideti($m, 1)); echo '<br>';
//3.
$m2 = [15,3,10,20,2,0,5];   // funkcijoj rado didziausia elementa priskyrus d
function didziausias($mm){
    $d = 0;
    for($i = 0; $i<count($mm); $i++){
        if ($mm[$i]>$d) $d = $mm[$i];
    }
    return $d;
}
echo didziausias($m2) . '<br>';
//4
$m3 = [15,3,10,20,2,0,5];   // funkcijoj rado didziausia elementa nepriskiriant d
function didziausias1($mm1){
    for($i = 0; $i<count($mm1); $i++){
        if (isset($d2)){
            if ($mm1[$i]>$d2) $d2 = $mm1[$i];
        }else $d2 = $mm1[$i];
    }
    return $d2;
}
echo didziausias1($m3) . '<br>';
//5.
$m4 = [15,3,10,20,2,0,5];   // funkcijoj rado maziausia elementa nepriskiriant d
function maziausias($mm2){
    for($i = 0; $i<count($mm2); $i++){
        if (isset($d3)){
            if ($mm2[$i] < $d3 && $mm2[$i] > 0) $d3 = $mm2[$i]; // siaip maziausi reiksme yra 0 bet sitoj eilutej pasakom kad suma turi buti didesne uz 0 tai gauname 2
        }else $d3 = $mm2[$i];
    }
    return $d3;
}
echo maziausias($m4) . '<br>';