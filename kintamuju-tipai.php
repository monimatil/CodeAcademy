<?php
$a = true;  //logine reiksme - teisingai
$b = false;  //logine reiksme - neteisingai

$c = 6>5; // gauname true
$d = 5>6; // gauname false
echo $a . '<br>';
echo $b . '<br>';
echo $c . '<br>';
echo $d . '<br>';

var_dump($d);  //kintamojo isvedimas diagnostinis
print_r($c);

$f = (bool)1;  // is vieneto padaro true. tipo cast
var_dump($f);

$int_a = 0x10; //hex dec integer nuo 0 iki 15
echo $int_a . '<br>'; // ats = 16

// integers - TIK SVEIKI SKAICIAI

$float_a = 1.15e1;
echo $float_a . '<br>'; // float sk per kableli

// EILUTES (STRING)
 $eil = ' *** ';
 $eil_a = 'Labas $eil rytas'; // su viengubom kabutem viska raso kaip texta ('Labas $eil rytas')
 echo $eil_a . '<br>';

echo "Labas $eil rytas" . '<br>'; //dvigubose kabutese iesko kintamojo ("Labas $eil rytas")
echo "Labas ($eil) rytas" . '<br>'; // rade kintamaji ji iskiria su skliaustais
echo "Labas \x31 rytas" . '<br>'; // is unicodo iesko reiksmes (pvz: \x31 = 1) ditinai \

$aaa = <<<EOT
Labas rytas <br>  
as atejau 
EOT;
echo $aaa . '<br>';  // kad ir kirk eil su situ kodu viska rasys vienoje eil

var_dump(array(<<<EOD
foobar!
EOD

));
 echo strlen("abcdef")  . '<br>';

 $bbb = "Labas rytas";
 $ccc = substr($bbb, 6, 3);
 echo $ccc . '<br>';
echo strtoupper($ccc) . '<br>';

 $o_1 = new stdClass();  // objekto sukurimas
//$o_2 = new class{};  // objekto sukurimas tik php.7 naujausioj versijoj
$o_3 = (object) [];  // tuscia masyva castina i objekta
$o_4 = json_decode("{}");  // pavercia objektus i tekstus

$o_1-> tipas ='automobilis'; // kreipinys i jo property(savybe)
$o_1-> pavdeze = 'automatine';
$o_1-> durys = 4;

var_dump($o_1);

echo $o_1-> tipas . ' ' .$o_1->pavdeze. '<br>'; //prieiga pr savybiu
$o_1->{'Labas rytas'} = 'aaa';
echo $o_1->{'Labas rytas'} . '<br>';

echo $o_1->{'tipas'} . ' ' . $o_1->{'durys'} . '<br>';

?>
