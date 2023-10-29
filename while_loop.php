<?php

      /*
          SYNTAX : 
                   while(condition)
                   {
                    // code to be executed 
                   }
      */

      //php program to perform while loop
    $x = 1;
    
    //using while loop
    while($x<=10)
    {
        if($x%2 == 0)
        {
            echo"$x<br/>";
        }
        $x++;
    }
?>