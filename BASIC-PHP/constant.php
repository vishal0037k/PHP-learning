<?php
// constant data //
const data_1 = "This data is constant and never updated";
print "<br/>";


// const $data_1 = "We do not use variable in constant";//
//print $data_1;//
print "<br/>";

// const data_1 = "Try to update";
// print data_1;
print "<br/>";

?>



<?php 
$name = "Previous name";
$name = "Updated name using variable";
print $name;

print "<br/>";
// Print data using define //
define("data" , "Vishal");
// Not redclared showing error //
// define("data" , "Redeclared data name"); 

print "<br/>";
print data;

print "<br/>";
?>


