<?php
    $indexedArray = array(1,2,3,4,1);
    $associativeArray1 = array(
        "a" => "red",
        "b" => "green"
    );
    $associativeArray2 = array(
        "c" => "black",
        "b" => "yellow"
    );


// list()
    list($a,$b) = $indexedArray;
             echo "a = $a, b = $b";
    echo "<br/><br/>";

    // array_count_values()
    $occurance = array_count_values($indexedArray);
    foreach ($occurance as $x => $numofoccurance){
        echo "$x => $numofoccurance";
    }
    echo "<br/><br/>";

    // array_merge() and array_merge_recursive()
    print_r(array_merge($associativeArray1,$associativeArray2));
    echo "<br/><br/>";
    print_r(array_merge_recursive($associativeArray1,$associativeArray2));
    echo "<br/><br/>";


