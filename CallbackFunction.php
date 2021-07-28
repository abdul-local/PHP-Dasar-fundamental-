<?php

function sayHello(string $name, callable $filter){
    
    $finalname=call_user_func($filter,$name);

    echo "say hello {$finalname}".PHP_EOL;

    
}

sayHello('abdul', function($name){
    return strtoupper($name);
});
sayHello('abdul', fn($name)=>strtoupper($name));

sayHello('abdul','strtoupper');
sayHello('ABDUL','strtolower');




?>