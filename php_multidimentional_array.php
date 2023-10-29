<?php 
 
      //In this program we use Multidimentional Array (Array of  Arrays)
      $emp = array
    (
        array(1," Vijay ", 100000),
        array(2," Tanvi ", 200000),
        array(3," Sakshi ", 150000),
    );

    //using for loop
    for($row=0; $row<=3; $row++)
    {
        for($col=0; $col<=3; $col++)
        {
            echo$emp[$row][$col];
        }
        echo"<br/>";
    }
?>