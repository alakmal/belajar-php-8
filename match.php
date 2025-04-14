<?php

$value = "A";


$result = match ($value) {

    "A", "B", "C" => "Anda lulus",
    "D" => "Anda Tidak Lulus",
    "E" => "Sepertinya anda salah jurusan",
    default => "Nilai Apa itu"
};

echo $result . PHP_EOL;