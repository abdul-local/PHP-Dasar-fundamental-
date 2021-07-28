<?php

function sum($first,$second):int{

   
     $total=$first+$second;

     return $total;

}


$result=sum(20,20);

var_dump($result);

function finalgetValue(int $value):string{
    if($value>90){
        return "A";
    }else if ($value >80 && $value <=90){
        return "B+";
    }else if ($value >60 && $value <=70){
        return "B";
    }else if ($value >40 && $value <=60){
        return "C";
    }else {
        return "E";
    }
}

$hasilAkhir=finalgetValue(90);

var_dump($hasilAkhir);



?>