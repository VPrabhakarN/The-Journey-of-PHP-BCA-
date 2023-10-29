<?php

       /*
           SYNTAX : 
                    if(condition 1)
                    {
                        // code to be executed if 'condition 1' is true
                    }
                    else if(condition 2)
                    {
                        // code to be executed if 'condition 2' is true
                    }
                    .
                    .
                    .
                    else if(condition n)
                    {
                        // code to be executed if 'condition n' is true
                    }
                    else 
                    {
                        // code to be executed when all conditions will be false
                    }
       */

       //php program to perform if else if statement
       $speed = 120;

       //using if else if statement
       if($speed<60)
       {
        echo"Safe Driving !";
       }
       else if($speed>60)
       {
        echo"You are burning extra fuel";
       }
       else 
       {
        echo"It's Dengerous!";
       }
?>