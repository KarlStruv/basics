<?php
//Create an non-associative array with 5 elements where 3 are integers,
// 1 float and 1 string. Create a for loop that iterates non-associative array using
// php in-built function that determines count of elements in the array. Create a function
// that doubles the integer number. Within the loop using php in-built function print out
// the double of the number value (using your custom function).

$Array = [11, 21, 4, 3.4, "5"];


    $length = count($Array);
    for ($i = 0; $i < $length; $i++){
        $int = (int) $Array[$i];
        $int = $int * 2;
        echo "$int" . PHP_EOL;
    }





