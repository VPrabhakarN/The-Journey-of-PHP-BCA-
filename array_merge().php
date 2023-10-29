<?php
      
      //php program to perform 'merge()' function
      //first we define 1st array
      $hatchbacks = array("Suzuki"=>"Baleno","Skudo"=>"Fabio","Tata"=>"Harrier");

      //now we definr 2nd array
      $friends = array("Vijay", "Tanvi","Sakshi");

      //we merge these two arrays
      $merged = array_merge($hatchbacks,$friends);
      print_r($merged);
?>