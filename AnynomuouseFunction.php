<?php

$sayHello = function($name){

    echo "Hello {$name}".PHP_EOL;

};

$sayHello('abdul');

function sayGoodBy(string $name, $filter){
    $finalname=$filter($name);

    echo "Say Good By {$finalname}".PHP_EOL;
}

sayGoodBy('abdul',function( string $name){
    return strtoupper($name);
});
$filterFunction=function( string $name){
    return strtoupper($name);};
sayGoodBy('abdul',$filterFunction);

$firstname="abdul";
$lastname="hamzan";

$syHelloAbdul = function () use  ($firstname,$lastname){
    echo "Hello {$firstname} {$lastname}";
};
$syHelloAbdul();






?>