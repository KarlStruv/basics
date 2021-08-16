<?php
$john = new stdClass();
$john -> name = "Ivars";
$john -> surname = "Kalniņš";
$john -> age = "21";

$jane = new stdClass();
$jane -> name = "Maija";
$jane -> surname = "Kalniņa";
$jane -> age = "17";

$karl = new stdClass();
$karl -> name = "Karlis";
$karl -> surname = "Struve";
$karl -> age = "23";

$persons = [$john, $jane, $karl];

function isAdult(stdClass $person): string{
    return  $person->age >= 18;
}

foreach ($persons as $person){
    if (isAdult($person)){
        echo "{$person->name} is an adult." . PHP_EOL;
    } else{
        echo "{$person->name} is not an adult." . PHP_EOL;
    }
}