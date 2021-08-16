<?php
// Imagine you own a gun store.
// Only certain guns can be purchased with license types.
// Create an object (person) that will be the requester to purchase a gun (object)
// Person object has a name, valid licenses (multiple) & cash.
// Guns are objects stored within an array.
// Each gun has license letter, price & name. Using PHP in-built functions
// determine if the requester (person) can buy a gun from the store.

$person = new stdClass();
$person->name = "John";
$person->licenses = ["H", "P"];
$person->cash = 290;

$AKM = new stdClass();
$AKM->type = "AKM";
$AKM->license = "H";
$AKM->price = 450;

$Garand = new stdClass();
$Garand->type = "M1 Garand";
$Garand->license = "P";
$Garand->price = 250;

$MP40 = new stdClass();
$MP40->type = "MP-40";
$MP40->license = "H";
$MP40->price = 300;

$weapons = [$AKM, $Garand, $MP40];

foreach ($weapons as $key => $weapon){
    echo "{$key}| {$weapon->type} [{$weapon->license}] ({$weapon->price}$)" . PHP_EOL;
}
$selection = (int)readline("Enter selection: ");

if (!isset($weapons[$selection])){
    echo "Invalid selection" . PHP_EOL;
    exit;
}
 $selectedWeapon = $weapons[$selection];

if(!in_array($selectedWeapon->license, $person->licenses) || $person->cash < $selectedWeapon->price){
    echo "Person cannot afford this weapon!" . PHP_EOL;
    exit;
}else{
    echo "Person can afford this weapon!" . PHP_EOL;
}