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
 print "<hr/>";

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
print "<hr/>";
 
print "
2. Assignment operator [=].
";
print "<br/>";
 // EXAMPLE//
$a = 10;
$b = 20;
// Gives same result //
//  print $a = $a + $b; //
print  $a += $b;

 print "<br/>";
 print "<br/>";
 print "<br/>";
print "<hr/>";

 print "
 3. Comparison Operators [==, ===, !=, not equal to <>, !==, >, <, >=, <=, Spaceship <=> ].
 ";
 print "<br/>";
 // EXAMPLE//
 $comp_a = 10;
 $comp_b = 10;
 $comp_c = 20;
 print "a = 10, b = 10, c = 20";
 print "<br/>";

 print "a == b : ";
 print var_dump($comp_a == $comp_b);
 print "<br/>";

 print "a != b : ";
 print var_dump($comp_a != $comp_b);
 print "<br/>";

 print "a === b : ";
 print var_dump($comp_a === $comp_c);
 print "<br/>";
 print "<br/>";
 print "<br/>";
 print "<hr/>";

 print "
 4. Increment (+1) / Decrement (-1).
 ";
 print "<br/>";
 // EXAMPLE//
 $inc_value = 10;
 $dec_value = 10;
 print "Value 10";
 print "<br/>";

 print "Pre increment ++Value first display then increment : ";
 print ++$inc_value;

 print "<br/>";
 print "Post increment Value++ first increment then display : ";
 print $inc_value++;

 print "<br/>";
 print "Pre decrement --Value first increment then display : ";
 print --$dec_value;

 print "<br/>";
 print "Post decrement Value-- first increment then display : ";
 print $dec_value--;

 print "<br/>";
 print "<br/>";
 print "<hr/>";

 print "
 5. Logical operators. [ AND && , OR ||, NOT !]";
 print "<br/>";
 // EXAMPLE//
$log_1 = 10;
$log_2 = 10;
$log_3 = 20;
$log_4 = 20;
print "Log 1 = " . $log_1 . " / Log 2 = " . $log_2 . " and Log 3 = ". $log_3 . " / Log 4 = " . $log_4 ;
 print "<br/>";

 print "AND : 1 == 2 && 3 ==4 : ";
 print var_dump($log_1 == $log_2 && $log_3 == $log_4);
 print "<br/>";

 print "AND : 1 == 2 && 1 == 3 : ";
 print var_dump($log_1 == $log_2 && $log_1 == $log_3);
 print "<br/>";

 print "OR : 1 == 2 || 3 ==4 : ";
 print var_dump($log_1 == $log_2 || $log_3 == $log_4);
 print "<br/>";

 print "OR : 1 == 2 || 1 == 3 : ";
 print var_dump($log_1 == $log_2 || $log_1 == $log_3);
 print "<br/>";

 print "NOT : 1 != 2 : ";
 print var_dump($log_1 != $log_2 );
 print "<br/>";

 print "NOT : 1 != 3 : ";
 print var_dump($log_1 != $log_3 );
 print "<br/>";
 print "<br/>";
 print "<hr/>";

 print "
 6. String operators.
 ";
 print "<br/>";
 // EXAMPLE//
 $str_1 = "My name is ";
 $str_2 = "Vishal.";
 $age = 22;

 print "string 1 = My name is , string 2 = Vishal.";
 print "<br/>";

 print $str_1 . $str_2;
 print "<br/>";

 print "Hiee i am " . $str_2 . ' My age is ' . $age;
 print "<br/>";

 // String concatination or dot concatination //
 $str_1 .= $str_2 .= $age;
 print $str_1;
 print "<br/>";

 print "<br/>";
 print "<hr/>";

 print "
 7. Array operators/ conditional operators (if, if-else, else-if, swith).
 ";
 print "<br/>";
 print "Conditional statement if-else";
 print "<br/>";
$age_1 = 15;
if($age_1 >= 18){
  print "Age is " . $age_1 . " which is [greater] then or equal to 18.";
}else {
  print "Age is " . $age_1 . " which is [less] then or equal to 18.";
}
 print "<br/>";
 print "<br/>";

 print "Switch statement.";
 print "<br/>";

 $day = "Monday";
 print $day;
 print "<br/>";
 switch ($day) {
  case 'Monday':
    print "Today is " . $day;
    break;
    case 'Tuesday':
      print "Today is " . $day;
      break;
      case 'Wednesday':
        print "Today is " . $day;
        break;
        case 'Thursday':
          print "Today is " . $day;
          break;
          case 'Friday':
            print "Today is " . $day;
            break;
  default:
    print 'No day matched';
    break;
 }
 print "<br/>";
 print "<br/>";
 print "<hr/>";

  /* COMMENTS In PHP */
  // COMMENTS In PHP //

?>

</body>
</html>


