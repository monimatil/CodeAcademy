<?php
function arg($x, $y, $z){
    $d = $x**2 + sqrt($y) + $x * $y + $z;
    return $d;
}
echo arg(2, 5, 1);