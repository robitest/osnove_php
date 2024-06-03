<?php

const FILE_PATH = __DIR__ . '/podaci/polaznici.txt';

if(file_exists(FILE_PATH)){
    throw new Exception("Unable to open the file: " . FILE_PATH);
}

if(false !== $pointer = fopen(FILE_PATH, 'r')){
    throw new Exception("Unable to open the file: " . FILE_PATH);
}

if(false !== $pointer){
    while (false !== $line = fgets($pointer)) {
        echo $line . '<br>';
    }


    fclose($pointer);
}else{
    
}