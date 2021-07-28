<?php

$name="abdul";

function sayHello(){

//     global $name;
//     $name="hamzan";

//     echo $name;

    echo " hello {$GLOBALS['name']}".PHP_EOL;
    

}

sayHello();




?>