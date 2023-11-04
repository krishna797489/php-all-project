<?php
      
       // operators
        /* 1.>Arithmetic operators */
        /* 2.>Assignment operators */
        /* 3.>Comparison Operators */
        /* 4.>Logical Operators    */
          $a=45;
          $b=8;
          /*Arithmetic operators */
          echo "For a+b the result is". ($a+$b) . "<br>";
          echo "For a-b the result is". ($a-$b) . "<br>";
          echo "For a*b the result is". ($a*$b) . "<br>";
          echo "For a/b the result is". ($a/$b) . "<br>";
          echo "For a%b the result is". ($a%$b) . "<br>";
          echo "For a**b the result is". ($a**$b) . "<br>";


          /* Assignment operators >kisi dusre ki value assign krna */
          $a += 5;
          echo "For a, the value is" . $a . "<br>";

          $a -= 5;
          echo "for a, the value is ". $a . "<br>";
          $a *= 5;
          echo "For a, the value is ". $a . "<br>";
        
        /* 3.>Comparison Operators > two value ko compair krna */
            $x = 7;
            $y = 78;
            echo "For x== y, the result is ";  /* x and y ki value same hogi to condition true btayega */
            echo var_dump ($x == $y);
            echo"<br>";

             /* 4.> Logical Operators*/

             $m = false;
             $n = true;
             echo "For m and n,the result is ";  /* isko dono value true chahiye  */
             echo var_dump($m and $n);
             echo "<br>";

             echo "For m and n,the result is ";   /* isko ek value true chahiye koi bi */
             echo var_dump($m or $n);
             echo "<br>"; 
        
?>