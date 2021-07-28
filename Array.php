
<?php

$data=array(1,2,3,4);
// var_dump($data);
$name=['abdul','aziz','meli'];

// var_dump($name);

// operasi array

// ambil data element pertama 
// var_dump($name[0]);
// var_dump($name);
// echo $name[0];
// ubah data index ke nol
$name[0]="hamzan";

var_dump($name[0]);

//menambah data dengan posisi paling belakang;

$name[]="belakang";

var_dump($name);


// menghapus data array berdasarkan index dengan unset
unset($name[0]);

var_dump($name);

// menghitung jumlah total data di dalama array dengan method count

echo count($name);












?>