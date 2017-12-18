<?php
$m = ['BMW', 'Honda', 'Audi'];

$i = 1;
while ($i <=count($m)){
    echo $i . '. ' . $m[$i - 1] . '<br>';
    $i++;
}
echo '<br>';

for ($i = 1;  $i<=count($m); $i++){
    echo $i . '. ' . $m[$i - 1] . '<br>';
    $i++;
}
echo '<br>';

$i = 1;
do {
    echo $i . '. ' . $m[$i - 1] . '<br>';
    $i++;
}
while($i <= count($m));
