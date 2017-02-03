<?php

$dir = __DIR__; 
function searchFiles($dir)
{
   
    $arr = scandir($dir);
    foreach ($arr as $value) {
        if (is_file($value)) {
           $result .= $value . '<br>';

        }
       
    }
   
        return $result;
}
echo 'Абсолютный путь директории ' . $dir . ': <br>';
echo searchFiles($dir);


















