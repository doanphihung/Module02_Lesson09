<?php
include "Stack.php";
function reverseArray($array)
{
    $reverse = new Stack();
    foreach ($array as $value) {
        $reverse->push($value);
        array_shift($array);
    }
    foreach ($reverse->stack as $value) {
       array_push($array, $reverse->pop());
    }
    echo "<pre>";
    var_dump($array);
}
$a = [1,2,3,4];
reverseArray($a);
