<?php


if(!empty($_POST)){
    foreach($_POST as $k => $d){
        if(!empty($d)){
            echo "$k: $d <br>";
        }else{
            echo "$k: Nema podataka. <br>";
        }
    }
}else{
    echo 'Nema podataka za obradu <br>';
}



?>


