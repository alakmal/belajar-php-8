<?php


$name = "Eko";
$result = $name == "Eko" ? "Sukses" : throw new Exception("Ups");

function validate(?string $name)
{

    $result = $name ?? throw new Exception("Null");

    echo "Hello $result" . PHP_EOL;
}