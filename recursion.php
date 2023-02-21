<?php
     /**
     function fibo(int $num){
          static $n1=0, $n2=1, $n3;

          if($num > 0){
               $n3 = $n1 + $n2;
               $n1 = $n2;
               $n2 = $n3;

               echo $n3." ";
               fibo($num-1);
          }
     }

     fibo(10);
      */

     function fact(int $n){
          if($n==1)
               return 1;
          
          return $n*fact($n-1);
     }
     echo fact(5);
?>