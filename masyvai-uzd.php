<?php
 $a = [1, 5, 6, 8, 9, 50, 14];

 function daugyba($d, $skaiciai){
     for ($i = 0; $i < count($d); $i++)  $d[$i] = $d[$i] * $skaiciai;
     return $d;
 }
echo json_encode(daugyba($a, 2)); echo '<br>';