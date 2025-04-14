<?php


function sampleFunction(string | array $data): void
{

    if (is_string($data)) {
        echo "Argument is String" . PHP_EOL;
    } else if (is_array($data)) {
        echo "Argument is Array" . PHP_EOL;
    }
}


sampleFunction("Eko");
sampleFunction(["eko"]);