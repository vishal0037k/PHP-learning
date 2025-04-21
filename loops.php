<?php
print "<h1> Loops in PHP.<h1/>";
print "<br/>";

print "<h2>Types of Loops in PHP.<h2/>";
print "<br/>";

print "For loop, While loop, Do While, For Each loop";
print "<br/>";

$i = 0;
// While //
print "While : ";
while ($i <= 10) {
    print $i;
     $i++;
}
print "<br/>";

// Do While //
print " Do While : ";
do {
    print $i++;
} while ($i <= 20);
print "<br/>";


//  For //
print " For : ";
 for ($i=0; $i <= 10 ; $i++) { 
   print $i;
 }
 print "<br/>";


 // Loop break //
 $user_need = 5;
 print "Loop break : <br/>";
 for ($i=0; $i <= 10 ; $i++) { 
   print $i;
   print "<br/>";
   if ($i == $user_need) {
    break;
   }
 }
 print "<br/>";

 
?>