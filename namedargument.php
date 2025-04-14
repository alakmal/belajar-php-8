<?php

function sayHello(string $first, string $middle, string $last): void
{
    echo "Hello $first $middle $last" . PHP_EOL;
}

sayHello(first: "eko", last: "Khannedy", middle: "Kurniawan");