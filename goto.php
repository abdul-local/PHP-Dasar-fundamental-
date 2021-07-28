<?php

// goto a;

// echo "Hello B".PHP_EOL;



// // buat label a
// a: 

// echo " Hello A".PHP_EOL;

$counter=1;

while (true) {

    echo "nilai:{$counter}".PHP_EOL;
    $counter++;
    if ($counter >10){

        goto end;


    }
   
}

end:
echo "ekskusi di akhiri".PHP_EOL;




?>