<?php

include '1.html';
$a = $_POST ['a'];
$b = $_POST ['b'];

function getCommonWords($a, $b){
    $a = explode(' ',$a);
    $b = explode(' ',$b);
    if ($a === $b) {
return $a;
    }
}
print_r(getCommonWords($a,$b));

