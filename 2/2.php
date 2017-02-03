<?php


include '2.html';
if (!empty($_POST)) {
    $text = $_POST['text'];
    $arr = explode(' ', $text);
    usort($arr, function ($a,$b)
    {
        return (mb_strlen($b) > mb_strlen($a));
    });
    $result = $arr[0]. ' ; ' .$arr[1] . ' ; ' . $arr[2]. ';';
}
        if (!empty($result)) {
            echo $result;
        }
