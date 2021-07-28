<?php

$counter=1;

// while (true) {

//     echo "nilai :{$counter}".PHP_EOL;
//     $counter++;

//     if ($counter>10){
//         break;
//     }


    
// }

for ($i=0; $i <10 ; $i++) { 

    if ($i%2==0){
        // artinya apabila nilai ketemu dengan hasil bagi yang sisanya 0 maka akan mengekskusi perintah seterusnya
        continue;
    }
    echo "bilangan ganjil saja: {$i}".PHP_EOL;
}





?>