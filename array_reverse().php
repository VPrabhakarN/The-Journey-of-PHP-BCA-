<?php

      //php program to perform 'reverse()' function in the array
      $rollno = array(1,2,3,4,5,6,7,8,9,10);

      //using 'reverse()' function
      $rev = array_reverse($rollno);
      
      //using foreach loop
      foreach($rev as $vita)
      {
        echo"$vita<br/>";
      }

?>