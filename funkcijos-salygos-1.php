<?php
function ilgis($a){
    $v1 = 'Tomas';
    $v2 = 'Ana';
    $v3 = 'Antanas';
    if (strlen($v1) == $a) return $v1;
    elseif (strlen($v2) == $a) return $v2;
    elseif (strlen($v3) == $a) return $v3;
    else return 'Nerasta';

}
//1
echo ilgis( 3);   // isvede Ana nes zodis sudarytas is 3 raidziu
echo '<br>';
//2
echo ilgis( 5);   // isvede Tomas nes zodis sudarytas is 5 raidziu
echo '<br>';
//3
echo ilgis( 7);   // isvede Antanas nes zodis sudarytas is 7 raidziu
echo '<br>';