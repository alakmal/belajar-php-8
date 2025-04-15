<?php


function sayHello(Stringable $stringable)
{

    echo "Hello {$stringable->__toString()}" . PHP_EOL;
}