<?php

     $t1 = 0;
     $t2 = 1;

     echo $t1." ".$t2." ";
     for($i=0; $i<10; $i++){
          $new = $t1 + $t2;
          echo $new." ";

          $t1 = $t2;
          $t2 = $new;
     }

?>