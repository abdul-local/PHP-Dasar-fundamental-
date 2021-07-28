<?php


// function sayHello($name="anynomues",$lastname=""){
//     echo " hello {$name} {$lastname}".PHP_EOL;
// }
// sayHello('abdul');
// sayHello('eko');
// sayHello('abdul','hamzan');


// function sum(int $first, int $last){

//     $total=$first+$last;

//     echo "Total: $first+$last=$total".PHP_EOL;

// }
// sum("10","10");
// sum(2,2);

function sumAll(array $values){

    $total=0;
    foreach($values as $value){
        $total+=$value;
    }

    echo "Total:".implode(",",$values)."={$total}".PHP_EOL;

}


function sumAll1(...$values){

    $total=0;
    foreach($values as $value){
        $total+=$value;
    }

    echo "Total:".implode(",",$values)."={$total}".PHP_EOL;

}
sumAll1(1,2,3,4,5);



?>