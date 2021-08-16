<?php
//Create a non associative array with integers and print out only integers that divides by 3 without any left.

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];

foreach ($numbers as $number){
    $final = $number % 3;

    if($final === 0){
        echo "$number" . PHP_EOL;
    }
}