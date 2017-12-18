<?php

function pitag($a, $b){
   $c= $a**2 + $b**2;
   return sqrt($c);
}
echo pitag(2, 3);