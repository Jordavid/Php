<?php

function array_debug($form){
    echo '<pre>';
    print_r($form);
    echo '</pre>';
}

function toArray($string){
    $array = str_split($string);
    for ($i= 0; $i < sizeof($array); $i++){
        echo $i .' => ' . $array[$i] . '<br>';
    }
}

//toArray('Sanogo');