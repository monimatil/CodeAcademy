<?php
function spalvos_kodas($spalva){
    switch ($spalva){
        case 'raudona': $kodas = 'red';
        break;
        case 'rozine': $kodas = 'pink';
        break;
        case 'tamsus': $kodas = '#999999';
        break;
        default: $kodas = 'black';
    }
    return $kodas;
}
echo '<p style = "color:' . spalvos_kodas('raudona') . '">Labas</p>' . '<br>';  //labas raso raudonai
echo '<p style = "color:' . spalvos_kodas('rozine') . '">Labas</p>' . '<br>';   //labas raso rozine
echo '<p style = "color:' . spalvos_kodas('tamsus') . '">Labas</p>' . '<br>';  //labas raso sviesiai pilka
echo '<p style = "color:' . spalvos_kodas('ruda') . '">Labas</p>' . '<br>';
//labas raso juodai, naudoja default spalva nes ruda nera pateikta

?>
