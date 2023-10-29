<?php

     /*
         SYNTAX : 
                  if(condition 1)
                  {
                    // code to be executed if 'condition 1' is true
                    if(condition 2)
                    {
                        //code to be executed if 'condition 2' is true
                    }
                  }
     */

     //php program to perform nested if statement
     $age = 23;
     $nationality = "Indian";

     //using nested if statement
     if($nationality == "Indian")
     {
        if($age >= 18)
        {
            echo"Eligible for voting!";
        }
     }
?>