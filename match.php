<?php


$value = 80;

$result = match (true) {

    $value >= 80 => "A",
    $value >= 70 => "B",
    $value >= 60 => "C",
    $value >= 50 => "D",
    default => "E"
};

echo "Nilai $value " . PHP_EOL;