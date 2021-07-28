
<?php

$data=[1,2,3,4,5,6];
// ubah array jadi string
$hasiljoin=join("",$data);
$fullname="abdul hamzan wadi sofware engineer";
// ubah string jadi array
$explodedfullname=explode(",",$fullname);

// menghapus spasi
$hasiltrim=trim("  abdul  ");

var_dump($hasiltrim);
// var_dump($explodedfullname);
echo $explodedfullname[0].PHP_EOL;
echo $hasiljoin.PHP_EOL;






?>