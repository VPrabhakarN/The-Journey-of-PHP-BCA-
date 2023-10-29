<?php 
     
       /*
          SYNTAX :
                   switch(x)
                   {
                    case value 1: 
                        // executed this code when x = value 1
                        break;
                    case value 2:
                        // executes this code when x = value 2
                        break;
                    .
                    .
                    .
                    default:
                    // executes this code when x matches none of the specific options
                }
       */

       //php program to perform switch statement 
       $car = "BMW";

       //using switch case 
       switch($car)
       {
        case "Audi":
            echo"Audi is amazing";
            break;
        case "Jaguar":
            echo"Jaguar is also amazing";
            break;
        case "BMW":
            echo"BMW is Amazing!";
            break;
        default:
            echo"$car is okay";
        }
?>