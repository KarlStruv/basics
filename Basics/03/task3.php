<?php
$person = new stdClass();
$person->name = "John";
$person->surname = "Doe";
$person->surname = 50;

$persons = [$person];

foreach ($persons as $personas){
    var_dump("{$person->name} {$person->surname} {$person->surname} " . PHP_EOL);
}


