<?php
/**
 * Created by PhpStorm.
 * User: Saad-Nextdot
 * Date: 1/8/2018
 * Time: 12:49 PM
 */

$a ="1";
$b = &$a;
$b = "2$b";


//echo $a.",".$b;

//array to object

$arr = [
    'hello' => 'first greeting',
    'hi' => 'second greeting'
];



$arr = json_encode($arr);
echo "<pre>";

print_r($arr);