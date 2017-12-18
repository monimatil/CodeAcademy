<?php
$t = date("H");
var_dump($t);

if ($t > '6') {
    echo "Have a good day!";
}
else echo 'Good evening';
echo '<br>';

$a = 6;
if ($a == 5) echo 'Lygu' . '<br>';
elseif ($a > 5) echo 'Daugiau<br>';
else {
    echo 'Maziau';
    echo '<br>';                  // jei echo dvi komandos ar daugiau butinai reikia figuriniu sklaiustu
}

?>