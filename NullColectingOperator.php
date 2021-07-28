<?php

$data=[];

// tanpa colecting

// if (isset($data['action'])){
//     $action=$data['action'];
// }else {
//     $action='noting';
// }

// echo $action;


// dengan collecting

$action=$data['action'] ?? 'noting';
echo $action;





?>