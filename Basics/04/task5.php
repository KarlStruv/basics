<?php
//Create an associative array with objects of multiple persons.
//Each person should have a name, surname, age and birthday. Using loop (by your choice) print out every person's personal data.

$john = new stdClass();
$john -> name = "Ivars";
$john -> surname = "Kalniņš";
$john -> age = "21";
$john -> dob = "08-08-2000";

$jane = new stdClass();
$jane -> name = "Maija";
$jane -> surname = "Kalniņa";
$jane -> age = "24";
$jane -> dob = "03-01-1997";

$persons = [$john, $jane];

foreach ($persons as $person){
    echo "{$person->name} {$person->surname} {$person->age} / {$person->dob}" . PHP_EOL;
}





