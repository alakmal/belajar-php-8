<?php


function sayHello(Stringable $stringable)
{

    echo "Hello {$stringable->__toString()}" . PHP_EOL;
}

class Person
{

    public function __toString()
    {
        return "Person";
    }
}


sayHello(new Person());