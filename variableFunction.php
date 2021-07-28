<?php

function foo(){
    echo "Hello foo".PHP_EOL;
}

$functionName="foo";
$functionName();

function sayHello(string $name, $filter):void{

    $filtername=$filter($name);
    echo "hasil filtername:{$filtername}".PHP_EOL;

}

sayHello('abdul','strtoupper');



?>