<?php

$abdul=array(

    "name"=>"abdul",
    "age"=>21,
    "hoby"=>"programming"
);

var_dump($abdul);
// ambil data name
echo $abdul['name'];
echo "\n";

// array di dalam array

$keluarga=[
    "name"=>"hamzan",
    "age"=>21,
    "address"=>[
        "jalan"=>"pondok indah",
        "lokasi"=>"jakarata selatan",
        "blok"=>25
    ]

    ];
    // var_dump($keluarga);
    echo $keluarga['address']['jalan'];
    echo "\n";
    echo $keluarga['address']['lokasi'];









?>