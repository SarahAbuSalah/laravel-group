<?php

// index aray

$names = array("sarah" , "rawnd" , "raghad" , "yara");

$names2 = ["sarah" , "rawnd" , "raghad" , "yara"] ;

echo $names[1];

// Associative array -- key => value

$person = [
    "name" => "sarah",
    "age" => 23
];

echo $person["age"];

//Multidimensional array

$persons = [
    [
        "name" => "sarah",
        "age" => 23,
    ],
    [
        "name" => "laial",
        "age" => 24,
    ],
    [
        "name" => "may",
        "age" => 20,
    ]
];

echo $persons[2]["age"];