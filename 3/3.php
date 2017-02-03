<?php 

$number = $_POST["num"]; 
$fileName = "3.txt"; 

$file = file_get_contents($fileName); 
$array = explode(" ", $file); 

$result = array(); 
foreach ($array as $value) { 
if(strlen($value) <= $number){ 
$result[] = $value; 
} 
} 

file_put_contents($fileName, implode(" ", $result));

