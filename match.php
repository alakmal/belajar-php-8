<?php


$name = "Mr. Eko";

$result =  match (true) {
    str_contains($name, "Mr.")
    => "Hello Sir",

    str_contains($name, "Mrs.") => "Hello Mam",
    default => "Hello"
};

echo $result . PHP_EOL;