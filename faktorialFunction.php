<?php

function faktorialLoop(int $values):int{
    $count=1;

    for($i=1; $i<=$values; $i++){
        $count*=$i;
    }

    return $count;
}

var_dump(faktorialLoop(4));

function faktorialRecursive(int $value): int{

    if ($value==1){
        return 1;
    }else {
        return $value * faktorialRecursive($value -1);
    }

}
$hasil=faktorialRecursive(4);
var_dump($hasil);

function loop(int $value){
    if ($value==0){
        echo "selesai";
    }else{

        echo "loop :{$value}".PHP_EOL;
        loop($value-1);

    }


}
loop(20);

?>