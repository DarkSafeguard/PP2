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