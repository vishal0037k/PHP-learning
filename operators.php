<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    *{
        margin: 0%;
        padding: 0%;
        box-sizing: border-box;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    body{
        max-width: 90%;
        margin: auto;
    }
    h1{
        text-align: center;
        margin: 20px;
    }
    .main-div{
        display: flex;
        justify-content: center;
        gap: 0px;
    }
    .box{
        max-width: 100%;
        border: 2px solid black;
        padding: 10px;
        font-weight: bold;
        font-size: 25px;
    }
   
</style>
</head>
<body>
    <h1>Operators IN PHP</h1>
<?php 
// DATATYPES //
$operators = "
 <div class = 'main-div'>
  <div class='box'>
  <p class = 'para-1'> 
1. Arithmatic operators 
  </p>
  </div>
  <div class='box'>
  <p class = 'para-1'> 
2. Assignment operators
  </p>
  </div>
  <div class='box'>
  <p class = 'para-1'> 
3. Comparison operators
  </p>
  </div>
  <div class='box'>
  <p class = 'para-1'> 
4. Increment / Decrement
  </p>
  </div>
  <div class='box'>
  <p class = 'para-1'> 
5. Logical
  </p>
  </div>
  <div class='box'>
  <p class = 'para-1'> 
6. String
  </p>
  </div>
  <div class='box'>
  <p class = 'para-1'> 
7. Array operators Conditional
  </p>
  </div>
  <div class='box'>
  <p class = 'para-1'> 
8. Assignment Operators 
  </p>
  </div>
</div>
 ";

 print $operators;
 print "<br/>";

 print "
 1. Arithmatic operators = Plus(+), Minus(-), Divide(/), Multiply(*), Exponential(**).
 ";
 print "<br/>";
 // EXAMPLE//
$a = 22;
$b = 10;
print "a + b = ";
print $a + $b;
print "<br/>";

print "a - b = ";
print $a - $b;
print "<br/>";

print "a / b = ";
print $a / $b;
print "<br/>";

print "a * b = ";
print $a * $b;
print "<br/>";


print "a % b = ";
print $a % $b;
print "<br/>";


print "a ** b = ";
print $a ** $b;
print "<br/>";

print "<br/>";
print "<br/>";
print "<br/>";
 
 print "
 2. Integer = Numbers 0 - 9.
 ";
 print "<br/>";
 // EXAMPLE//
 $number = 10+10;
 print var_dump($number);
 print "<br/>";
 print "<br/>";
 print "<br/>";

 print "
 3. Float = Decimal values 0.0 -9.9.
 ";
 print "<br/>";
 // EXAMPLE//
 $float = 10.10;
 print var_dump($float);
 print "<br/>";
 print "<br/>";
 print "<br/>";

 print "
 4. Boolean = True / False.
 ";
 print "<br/>";
 // EXAMPLE//
 $bool = True;
 print var_dump($bool);
 print "<br/>";
 print "<br/>";
 print "<br/>";

 print "
 5. Null = 'Empty'.
 ";
 print "<br/>";
 // EXAMPLE//
 $nul = null;
 print var_dump($nul);
 print "<br/>";
 print "<br/>";
 print "<br/>";

 print "
 6. Array = [ collection of multiple datatypes].
 ";
 print "<br/>";
 // EXAMPLE//
 $arr = ["abc", "def", "ghi", 500, false];
 print var_dump($arr);
 print "<br/>";
 print "<br/>";
 print "<br/>";

 print "
 7. Object = object (class).
 ";
 print "<br/>";
 // EXAMPLE//
//  $obj = new className();
//  print var_dump($obj);
 print "<br/>";
 print "<br/>";
 print "<br/>";

 print "
 8. Recourse = External library resource.
 ";
 print "<br/>";
  // EXAMPLE special datatype uded for external library or api connection //
  $connection = ftp_connect("127.0.0.1") or die("Local host not found");
  print var_dump($connection);
  print "<br/>";
  print "<br/>";
  print "<br/>";



  /* COMMENTS In PHP */
  // COMMENTS In PHP //

?>

</body>
</html>


