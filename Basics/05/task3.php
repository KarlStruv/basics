<?php
// Create a person object with name, surname and age.
// Create a function that will determine if the person has reached 18 years of age.
// Print out if the person has reached age of 18 or not.


$john = new stdClass();
$john -> name = "Ivars";
$john -> surname = "Kalniņš";
$john -> age = "13";


$person = [$john];

function considerAge(stdClass $person): string{
    if($person -> age >= 18){
        return "{$person->name} is an adult.";
    }else{
        return "{$person->name} is not an adult.";
    }

}

echo considerAge($john) . PHP_EOL;




