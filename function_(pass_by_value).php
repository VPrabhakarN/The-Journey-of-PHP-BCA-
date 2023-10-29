<?php 
      
    function byvalue($a)
    {
        echo"Value of a : $a<br/>";
        $a = 40;
        echo"New value of a : $a<br/>";
    }
    $p = 10;
    byvalue($p);
    echo"Value of p : $p";
?>