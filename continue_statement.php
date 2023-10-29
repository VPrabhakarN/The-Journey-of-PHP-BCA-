<?php
   //php program to demonstrate the use of continue statement
   echo"Even numbers between 1 to 20: <br/>";
   $i = 1;

   //using while loop 
   while($i<=20)
   {
    if($i%2==1)
    {
        continue;
    }
    echo"$i";
    echo"<br/>";
    $i++;
   }
?>