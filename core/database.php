<?php

function map_data($data) {
    $all_data = []; 
    while($row = mysqli_fetch_assoc($data)){
        $all_data[] = $row;
    }
    return $all_data;
}

