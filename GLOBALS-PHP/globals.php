<img src="../GLOBALS-PHP/img/types-of-globals.jpg"  alt="Super Globals" height="300px" width="500px" />
<?php
// CHECK TYPES OF SUPER GLOBALS //
print ("<h2>Super globals are inbuilt kewords in php</h2>");

print ("Types of Super globals are : ");
const data = 20;
$a = 10;

// Print globals //
echo ("<pre>");
print_r($GLOBALS);
print ("<hr/>");


// PEINT the server's all information //
print_r($_SERVER);
print ("<hr/>");


// Access information like this //
print_r($_SERVER['REQUEST_TIME']);
echo ("<pre>");
print ("<br/>");

print ("<hr/>");
print ("<h3>request is use to transfer data from html to php and it's types are [GET, POST, PUT, PATCH, DELETE]</h3>");
// //
?>
