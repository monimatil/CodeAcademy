<?php

$m = ['labas', 'rytAS', '.kaunas#', 'jonas jonAITIS'];

function mazosios($s){
    $x = strtolower($s);
    $x = rtrim(ltrim($x, '.'), '#');
    return $x;
}
// masyvai
$nm = [];
$nm1 = [];
$nm2 = [];
$nm3 = [];
$nm4 = [];
$nm5 = [];
for ($i = 0; $i<count($m); $i++){
    $s = mazosios($m[$i]);
    $nm[] = ucfirst($s);  // pirma raide didz
    $nm1[] = strtoupper($s);  // visas raides padaro didz
    $nm2[] = str_replace('a', '*', $s);   // keiciam a raides i - *
    $nm3[] = $s . '-' . strlen($s);   // prie zodziu prijungia raidziu skaiciu
    $nm4[] = $s . '-' . strpos($s, 'a');  // kurioj vietoj pirma a raide skaivioja nuo 0
    $nm5[] = str_shuffle($s); // raides zodziuose sumaiso random
}
// elementu isvedimas
echo json_encode($nm) . '<br>';
echo json_encode($nm1) . '<br>';
echo json_encode($nm2) . '<br>';
echo json_encode($nm3) . '<br>';
echo json_encode($nm4) . '<br>';
echo json_encode($nm5) . '<br>';