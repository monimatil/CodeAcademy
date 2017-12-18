<?php
//1
function sulyginti($a, $b) {
    if ($a > $b) return 1;
    elseif ($a == $b) return 0;    // 2 = (==) lygina reiksmes
    else return -1;
}
echo sulyginti(3, 2);
echo '<br>';
echo sulyginti(3, 3);
echo '<br>';
echo sulyginti(2, 3);
//2
function ilgis($a, $b){
    if (strlen($a) == 0) return 'Tuscias';  // string - teksto eilute
    elseif (strlen($a) > $b) return 'Daugiau';
    elseif (strlen($a) == $b) return 'Lygu';
    else echo 'Maziua';
}
echo '<br>';
echo ilgis('Kaunas', 10);
echo '<br>';
echo ilgis('', 10);
echo '<br>';
echo ilgis('Kaunas', 3);
//3
function arg($a, $b){
$r = '';
    if (strlen($a) == 0) $r = 'Tuscias';  // string - teksto eilute
    elseif (strlen($a) > $b) $r = 'Daugiau';
    elseif (strlen($a) == $b) $r = 'Lygu';
    else $r = 'Maziau';
    return $r;
}
echo '<br>';
echo arg('Vilnius', 10);
//4
function lyg($a, $b){
    if ($a > $b) return true;
    else return false;
}
echo '<br>';
$c = lyg(6, 5);
if ($c) echo 'Daugiau';
else echo 'Needaugiau';
//5
function lyg1($a, $b){
    return $a > $b;
}
echo '<br>';
if (lyg1(4, 5)) echo 'Daugiau';
else echo 'Nedaugiau';