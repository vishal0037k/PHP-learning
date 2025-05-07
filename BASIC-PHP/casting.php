<?php
 print ("<h1> Casting type which means convert one datatype to another. </h1>");
 print ("<br>");
 $a = 10;

 print ("Before : ");
 var_dump($a);
 print ("<br>");


 print ("After : ");
// Convert to string //
//  $a = (string) $a ;

// Convert to Float //
$a = (float) $a ;

// Convert to Boolean //
//  $a = (boolean) $a ;

 var_dump($a);
 print ("<br>");

 // WE ALSO USE ARRAY AND OBJECT //
?>