<?php

 $dir = __DIR__;
$word = 'php';
function search($dir, $word)
{
    if (!is_dir($dir)) {
        return 'This is not a folder';
    }
    $arr = scandir($dir);
    $result = [];
    foreach ($arr as $file) {
        if (is_dir($file)) {
            continue;
        }
    if (stripos($file, $word) !== false) { // вхождение word в file
        $result [] = $file;
    }
    }
    return $result;
}
$files = implode('<br>', search($dir, $word));
echo $files;
