<?php

$a = '6' == 6; //true 2= (lygus)
var_dump($a);

$a = '6' === 6; //false su 3= (identiskas) tipas turi buti toksa pats
var_dump($a);

$a = 6 === 6; // true su 3= (nuemus kabutes 6 tipai yra identiski)
var_dump($a);

$a = true == 1;  // true
var_dump($a);

$a = 'a' != 'b'; // true
var_dump($a);

$a = 3;
echo ++$a . '<br>';  //4 (prideda pries)
echo $a++ . '<br>';  //4 (prideda po)
echo $a . '<br>';    //5 (prideda po paskutinio isvedimo)

$x = 5; $y = 10;

$a = $x == 5 && $y <10;    //&&- and. ||- or. !- not(paneigiam teigini).
var_dump($a);             // false

$a = $x == 5 && $y >=10;
var_dump($a);             //true

$a = $x == 5 || $y <10;    //true
var_dump($a);

$a = $x == 5 && !($y <10); //true
var_dump($a);

$a = $x == 5 xor $y = 10;  //true
var_dump($a);

$a = ($x == 5 xor $y == 10); //false
var_dump($a);



?>