<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
echo 'Labas';
// komentaras
/*komentaras
komentaras*/
 //kintamieji prasideda $
$a = 5;  //skaicius
$af = 5.6; // float(su kableliu)
$af = 3.1e-3; // float(3.1 * 10(-3))
$b = true; //boolean (loginis)
$c = "abc"; //string
$d = ["BMW", "Honda"];  //masyvas
$e = new stdClass(); // objektas
$f = NULL; //nieko

 /*kintamieji gali buti 3 rusiu
 -local ($a = 5;)
 -static
 -global */

 function pvz_static(){
     static $a = 0;  //sukuriama su pradine reiksme
     $a++;   // +1
     echo $a . '<br>';  // parodoma
 }
 pvz_static();  //sukuriamas $a; + 1 pridedamas, ir parodoma
 pvz_static();  //+1 parodoma
 pvz_static();  //+1 parodoma

$g = "Labas";

function pvz_local(){
    //$g = "rytas";  sita eil butina! reikia priskirti $g ir funksijos vid
    echo $g . '<br>'; //info grazina i psl
}
pvz_local(); // bus klaida

global $h;
$h = "Labas";  // nereikia priskirti $h funkcijos viduje
function pvz_global(){
    global $h;
    echo $h . '<br>';
}
pvz_global();

echo $GLOBALS['h'] . '<br>';
echo $h .  " rytas ", '<br>';

echo $_SERVER['PHP_SELF'] . '<br>';
echo $_SERVER['HTTP_HOST'] . '<br>';

eval('$s = "aaa";'); //"$s" ieskos kintamojo kai tekstas aaa dvigub kabut ("") zino kad cia tekstas. ivykdo php koda is teksto
echo $s . '<br>';
unset($s);  // panaikina
echo $s . '<br>'; //klaida nes panaikino $s kintamaji

define('konst', 'Labas'); // konstant $konst = 'labas'
echo konst . '<br>';

//const konst = 'Labas'; //sintakse klaseje



?>
</body>
</html>
