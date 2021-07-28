<?php

$first =[
    "first_name"=>"abdul"
];

$last=[
    "last_name"=>"hamzan"
];

$fullname=$first+$last;


// var_dump($first+$last);
var_dump($fullname['first_name']);

$a=[
    "first_name"=>"abdul",
    "last_name"=>"hamzan"
];

$b=[
    "first_name"=>"abdul",
    "last_name"=>"hamzan"
];

var_dump($a==$b);



?>