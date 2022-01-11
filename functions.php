<?php
function printArr(array $t){
    foreach ($t as $i){
        echo "<p>$i</p>";
    }
}

function largest(array $t){
    $l = 0;
    foreach ($t as $i){
        if($i > $l){
            $l = $i;
        }
    }
    echo "<p>Largest = $l</p>";
}

function removeDups(array $t){
    $t = array_unique($t);
    foreach ($t as $i){
        echo "<p>$i</p>";
    }

}