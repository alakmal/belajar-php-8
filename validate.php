<?php



function validate(string $name)
{

    if (trim($name) == "") {
        throw new Exception("Invalid Name");
    }
}

try {
    validate("      ");
} catch (\Throwable $th) {
    echo "Invalid name " . PHP_EOL;
}