<?php

    $category = array("Bike", "Car", "Bus", "Truck", "Train");
    foreach ($category as $item){
        echo "$item <br/>";
    }

    echo "===============================<br/>";
    $searchRes = array_search("Truckt",$category);
    echo var_dump($searchRes);

    echo "<br/>===============================<br/>";
    $category = array_reverse($category);
    foreach ($category as $item){
        echo "$item <br/>";
    }