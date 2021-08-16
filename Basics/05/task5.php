<?php
//Create a 2D associative array in 2nd dimension with fruits and their weight.
//Create a function that determines if fruit has weight over 10kg.
// Create a secondary array with shipping costs per weight.
// Meaning that you can say that over 10 kg shipping costs are 2 euros, otherwise its 1 euro.
// Using foreach loop print out the values of the fruits and how much it would cost to ship this product.

//I DID NOT FINISH THIS TASK BUT WILL KEEP TRYING TO FIGURE OUT THE WAY.

$fruits = [
    [
        "fruit" => "apples",
        "weight" => 11
    ],
    [
        "fruit" => "oranges",
        "weight" => 13
    ],
    [
        "fruit" => "tangerines",
        "weight" => 5
    ]
];


function getWeight(array $fruit): bool{

    if($fruit[]["weight"] <= 10){
        return true;

    }else{
        return false;

    }
}



echo getWeight($fruits) . PHP_EOL;


$costs = [
    "lessThan10" => 1,
    "moreThan10" => 2,
];

foreach($fruits as $key => $value) {
    echo $value["fruit"] . " total weight is: " .$value["weight"] . PHP_EOL;
    if(getWeight($fruits)){
        echo "Shipping cost is " . $costs["moreThan10"] . PHP_EOL;
    } else{
        echo "Shipping cost is " . $costs["lessThan10"] . PHP_EOL;
    }

}



//foreach ($weapons as $key => $weapon){
//    echo "{$key}| {$weapon->type} [{$weapon->license}] ({$weapon->price}$)" . PHP_EOL;
//}

