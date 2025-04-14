<?php



function sampleFunction(string | array $data): string|array
{

    if (is_string($data)) {
        return "Argument is String";
    } else if (is_array($data)) {
        return ["Argument is Array"];
    }
}


echo sampleFunction("Eko") . PHP_EOL;
foreach (sampleFunction(["eko"]) as $value) {
    echo $value . PHP_EOL;
}