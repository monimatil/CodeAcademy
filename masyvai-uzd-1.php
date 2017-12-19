<?php
//1
$a1 = [2, 5, 9, 7];

function dalyba($d1, $skaiciai1){
    for ($i = 0; $i < count($d1); $i++) $d1[$i] = $d1[$i] / $skaiciai1;
    return $d1;
}
echo json_encode(dalyba($a1, 2)); echo '<br>'; // isveda elementus padalintus is 2

//2
$a2 = ['Matas', 'Jonas', 'Antanas', 'Ana'];  //suskaicaivo kiek isviso raidziu yra

function raidziusuma($x){
    $s = 0;
    for ($i = 0; $i < count($x); $i++) {  //count duoda masyve esamu elementu skaiciu
        $s += strlen($x[$i]);

    }
    return $s;
}
$aa = [];
for ($k = 0; $k < count($a2); $k++){
    $aa[] = strtoupper($a2[$k]);
}
echo raidziusuma($a2) . '<br>'; // isveda raidziu suma (20)
echo json_encode($aa) . '<br>'; // visus elementus paraso didziosiom raidem

//3
$a3 = [2, 5, 9];

function sudetis($z){
    $e = 0;
    for ($i = 0; $i < count($z); $i++){
        $e = $e + $z[$i];
    }
    return $e;
}
echo sudetis($a3) . '<br>'; // isveda visu masyvo elementu suma (16)

//4
$a4 = ['2', '4', '8', '14'];
function param($mas1){
    $u = 0;
    for ($i = 0; $i < count($mas1); $i++){
        $u += sqrt($mas1[$i]);
    }
    return $u;
}
echo param($a4) . '<br>'; // isveda masyvo elementu sumos kvadratine sakni

//5

$t = ['Pirmas', 'Antras', 'Trecias', ' Ketvirtas'];

function textas($y){
    for( $w = 0; $w < count($y); $w++){
        $t1[$w] = ucwords(strtolower($y[$w]));
    }
    return $t1;
}

echo json_encode(textas($t)) . '<br>';





