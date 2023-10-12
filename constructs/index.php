<?php
$basePath = "C:\\Users\\braz9\\Desktop\\projects\\laracasts\\object-oriented-principles-php\\09\\";
require_once $basePath . "functions.php";


// exceptions

function add($one, $two) {

    if (! is_float($one) || ! is_float($two)) {
        throw new \Exception('has to be an number ');
    }

    return $one + $two;
}

echo add(2,[]);