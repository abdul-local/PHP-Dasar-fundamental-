<?php

$name='abdul';
$nilai=100;
echo 'name:'.$name .PHP_EOL;
echo "Nilai:".$nilai .PHP_EOL;

echo "======== Konversi Tipe Data =========";

$string =(string) 100;
echo "\n";
var_dump($string);

echo "\n";
$integer=(integer) '200';
var_dump($integer);
echo "\n";
$valueFloat=(float) "100.3";

var_dump($valueFloat);

var_dump(20*$valueFloat);
$data='abdul';

echo $data[0];

echo "\n";

// variabel parsing

$fullname="abdul";

echo "Nama:$fullname".PHP_EOL;


// carly

$var ="var";
echo "hello ${$var}s";






?>