<?php
// Create a function that accepts any string and returns the same value with added "codelex" by the end of it. Print this value out.

$someString = "Hello World!";

function acceptString(string $value): string{
    return ($value . " codelex");
}

echo acceptString($someString);