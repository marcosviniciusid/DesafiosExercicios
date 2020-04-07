<?php

$array1 = [
    'chave-01',
    'chave-02',
    'chave-03'
];

$array2 = [
    ...$array1, // Array Spread
    'chave-04',
    'chave-05',
    'chave-06',
];

print_r($array2);