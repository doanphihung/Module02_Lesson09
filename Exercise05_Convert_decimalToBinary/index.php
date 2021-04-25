<?php
include "Stack.php";

function convert($int) {
    $listBinary = new Stack();
    while ($int > 0) {
        $surplus = $int % 2;
        $listBinary->push($surplus);
        $int = floor($int/2);
    }
    echo implode($listBinary->stack);
}
convert(20);
