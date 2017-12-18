<?php

$a = array(1, 2, 'Varna'); //array su () sklaustais
 var_dump($a);

$a = [1, 2, 'Varna'];  // ta pati kaip su array() daro ir lauztiniai skliaustai []
var_dump($a);

// ASOCIATYVINIAI MASYVAI
$b = ['a' => 1, 'b' => '2', 'c' => [0, 1, 2, 3]];  // a- key, 1- value. value su kabutem daro string, be daro intg
var_dump($b);

$b = [0 => 0, 'a' => 1, 'b' => '2', 'c' => [0, 1, 2, 3, 4]];
var_dump($b);

echo $b['a'] . '<br>';

echo $b['0'] . '<br>';

$i = 0;
echo $b[(string)$i] . '<br>';

echo count($b) . '<br>'; //parodo kiek masyve yra elementu
echo count($b['c']);   //kiek tam tikro masyvo elemente yra reiksmiu

unset($b['a']);
var_dump($b);

unset($b['a']);
var_dump($b);
$b['aaa'] = 'Kaunas';
var_dump($b);

$a[] = 'Vilnius';         // deda i gala
$a[count($a)] = 'Utena';  // deda i gala
var_dump($a);
?>
