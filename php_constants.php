<?php  
       /* In this php program we are going to understand that there are two ways to define constants,
       such as :
       1) Using 'define()' function
       2) Using 'const' keyword  */

       
       //Now we use define() function to define constant 
       #SYNTAX : define("name", "value", case_insensitive);
       define("msg","This world is Mine !");
       echo msg;
       echo"<br/>";

       //Now we use 'const' keyword to define constant 
       #SYNTAX : const name = value;
       const MSG = "This World is not Mine !";
       echo"<br/>";
       echo MSG;     
?>