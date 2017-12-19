<?php
//1.
$m = ['BMW', 'Audi', 'Honda', 'Opel'];
echo Json_encode($m);                       // paavertimas i tekstine forma naudojamas kai nr perduot duomenis is frontendo i backenda ir gaunam info atgal
echo '<br>';
//2.
sort($m);                                  // rusiavimas didejimo tvarka
echo Json_encode($m);
echo '<br>';
//3.
rsort($m);                               // rsort rusiuoja is kitos puses
echo Json_encode($m);
echo '<br>';
//4.
//shuffle($m);                               // ismetomas random tvarka
//echo Json_encode($m);
//echo '<br>';
//5.
$m2 = array_slice($m, 1, 2);    // isvedama masyvo dalis. masyve argumentai numeruojami nuo 0. situo budu galima paimti ti is eiles einancius argumentus
echo Json_encode($m2); echo '<br>';
//6.
$m3 = array_slice($m, 1, 3);     //isveda 3 argumentus nes pasirinkta nuo 1 iki 3
echo Json_encode($m3); echo '<br>';
//7.
unset($m3[1]);
echo Json_encode($m3); echo '<br>';   //ismetam pagal numeri uzduota
//8.
$m4 = array_slice($m, 1, 3);  // ismetam pagal turini
$n = null;
for ($i = 0; $i<count($m4); $i++){
    if ($m4[$i] == 'BMW'){
        unset($m4[$i]);
        break;
    }
}
echo Json_encode($m3); echo '<br>';
//9.
$m5 = $m;
if (in_array('Honda', $m5)) echo 'Honda rasta  <br>';
else echo 'Honda nerasta <br>';          // in_array parodo ar masyve yra toks elementas kokio mes ieskom
//10.
$s = 'Honda, BMW, Audi, Opel';  //eilutes sukapojimas ir padarymas masyvu(atskirti kableliaias, tarpais taskais)
$ms = explode(',', $s);
echo Json_encode($ms); echo '<br>';   // masyvas is teksto s explode
for ($i = 0; $i<count($ms); $i++) $ms[$i] = trim($ms[$i]);
$s2 = implode(':', $ms); //is teksto i masyva
echo $s2; echo '<br>';
list ($auto1, $auto2, $auto3, $auto4) = $ms;        // is masyvo surasyti kintamuosius
var_dump($auto1);
var_dump($auto2);
var_dump($auto3);
var_dump($auto4);

$a1 = $ms[0];
$a2 = $ms[1];
$a3 = $ms[2];
$a4 = $ms[3];
var_dump($a1);
var_dump($a2);
var_dump($a3);
var_dump($a4);