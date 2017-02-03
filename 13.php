<?php

$string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';

$fruits = explode(' ', $string);
$new_fruits = (array_count_values($fruits));
arsort($new_fruits);
$list = '<ul>';
foreach ($new_fruits as $fruit => $number){
    $list .= "<li>{$fruit} - {$number}</li>";
}
$list .= '</ul>';
echo $list;



