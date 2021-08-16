<?php
$number = 30;

switch ($number){
    case $number < 50:
        echo"low" . PHP_EOL;
        break;

    case ($number > 50 And $number < 100):
        echo "medium" . PHP_EOL;
        break;

    case $number > 100:
        echo "high" . PHP_EOL;
        break;
}
