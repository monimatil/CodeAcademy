<?php
$sveciai = [    //jei yra nera tada asociatyvinis masybvas
    ['vardas' => 'Lukas', 'pavarde' => 'Lukaitis', 'patiekalas' => 'Mesa', 'issilavinimas' => 'Daktaras'], ['vardas' => 'Petras', 'pavarde' => 'Petraitis', 'patiekalas' => 'Zuvis'], ['vardas' => 'Tomas', 'pavarde' => 'Tomaitis', 'patiekalas' => 'Salotos', 'issilavinimas' => 'Bureja']
];
function info($e){    //e vieno zm duomenys
    $s = $e['vardas'] . ' ' . $e['pavarde'] . ' Patiekalas: ' . $e['patiekalas'];
    if (isset($e['issilavinimas'])) $s .= ' ' .$e['issilavinimas'];
    return $s;
}
echo 'Sveciu sarasas<br>';
echo '---------------<br>';

for ($i = 0; $i<count($sveciai); $i++){
    $line = ($i + 1) . '.' . info($sveciai[$i]) . '<br>';
    echo $line;
}
echo '------------------<br>';
echo 'Is viso sveciu: '.count($sveciai);

?>