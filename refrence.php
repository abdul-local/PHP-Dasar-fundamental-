
<?php

$name="mark tama";
$outhername=&$name;

$outhername="hamzan";

// hasil yang sama karena merference ke variabel $name
echo $outhername.PHP_EOL;
echo $name.PHP_EOL;

// pass by refrence

function increment(int &$value){
    $value++;

}

$counter=1;
increment($counter);
echo $counter.PHP_EOL;

// returning refrence

function &getValue(){
    static $value=100;

    return $value;

}

$a=&getValue();
$a=200;

$b=&getValue();

echo $b.PHP_EOL;









?>