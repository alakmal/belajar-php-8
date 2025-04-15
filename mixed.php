<?php


function testMixed(mixed $params): mixed
{


    if (is_array($params)) {
        return [];
    } else if (is_string($params)) {
        return "eko";
    } else if (is_numeric($params)) {
        return 1;
    } else {
        return null;
    }
}

var_dump([]);