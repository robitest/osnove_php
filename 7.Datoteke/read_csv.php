<?php

const USERS_CSV = __DIR__ . '/podaci/users.csv';

if(($handle = fopen(USERS_CSV, 'r')) !== false){ 
    $data = [];
    // var_dump(fgetcsv($handle));
    while(($row = fgetcsv($handle)) !== false){
        $data[] = $row;
    }

    var_dump($data);

}else{
    echo 'Unable to open the file.';
}