<?php
// is masyvo ima nuo nulio tai bmw bus pr 0
$masyvas = ['BMW', 'Audi', 'Honda', 'Jaguar'];
for ($i = 0; $i<count($masyvas); $i++){
    echo $i . '. ' . $masyvas[$i] . '<br>';
}
echo '<br>';

// is masyvo ima nuo nulio bet pr i pridejus viena bmw rasomas pr 1
$masyvas1 = ['BMW', 'Audi', 'Honda', 'Jaguar'];
for ($a = 0; $a<count($masyvas1); $a++){
    echo ($a + 1) . '. ' . $masyvas1[$a] . '<br>';
}
echo '<br>';

// nera kreipiniu i masyvo elementa o automatiskai ima numeracija. butina $i priskirti reiksme kad zinotu nuo kur pradeti numeruoti
$masyvas2 = ['BMW', 'Audi', 'Honda', 'Jaguar'];{
    $b = 10;
    foreach ($masyvas2 as $masina){
        echo ($b++) . '. ' . $masina . '<br>';
    }
}
