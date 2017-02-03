<?php

function reverse($arg)
{
    $a = '';
    for ($i = strlen($arg) - 1; $i >= 0; $i--) {
      
        $a .= $arg[$i];
    }
    return $a;
}
include '9.html';
echo reverse($_POST['text1']);
