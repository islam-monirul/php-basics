<?php

    $nums = array(
        array(1,2,3),
        array(4,5,6),
        array(7,8,9)
    );

    foreach ($nums as $num){
        foreach ($num as $singleNum){
            echo "$singleNum <br/>";
        }
    }