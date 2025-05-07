<?php
print "<h2 style = 'text-align: center'>Array in PHP</h2>";
print "<br/>";
print "<hr>";

print "<h4>Print arrays</h4>";
print "<br/>";
$users = [ "user 1",  "user 2",  "user 3",  "user 4", "user 5" ];
print $users[0];  print "<br/>";
print $users[1];  print "<br/>";
print $users[2];  print "<br/>";
print $users[3];  print "<br/>";
print $users[4];  print "<br/>";
print "<hr>";

// use for each to print all the data //
print "<h4>For each loop to print all data </h4>"; print "<br/>";

foreach($users as $x){
    print $x;  print "<br/>";
}
print "<hr>";

// use for each to break the part from the data //
print "<h4>For each loop to break the part from the data </h4>"; print "<br/>";

foreach($users as $x){

// Miss user 4 //    
    // if ($x == "user 4") {
    //     continue;
    // }

// Break and print till user 3 //   
    if ($x == "user 4") {
        break;
    }
    print $x;  print "<br/>";
}
print "<hr>";

print "<h2 style = 'text-align: center'>Associative Array in PHP (also have key instead of index)</h2>";
print "<br/>";

$user_details = ["name: " => "Vishal", "age: " => 22, "address: " => "Palampur"];
foreach($user_details as $key => $value){
    print $key."is".$value;
    print "<br/>";
}
print "<hr>";


// Multi dimentional array or nested array//
print "<h2 style = 'text-align: center'>Multidimensional array(having multiple arrays in 1 array)</h2>";
print "<br/>";
$users_main = [
    [1, "Vishal", "Palampur"],
    [2, "Abcd", "UK"],
    [3, "Wxyz", "Dubai"],
];
print "<pre>";
print_r($users_main);
print "</pre>";

for($i = 0; $i<count($users_main); $i++){
    // print_r(($users_main[$i])); 
    for($j = 0; $j<count($users_main[$i]); $j++){
        print(($users_main[$i][$j]));
        print "<br/>";
    }
}
  

print "<hr>";
print "<br>";
print "<br>";

// Array Modification - adding elements in array using Push method //
print("<h1> Array Modification - adding elements in array using Push method , use pop for removing & splice for multiple</h1>");
print("<br/>");
$add_user = ["user1", "user2", "user3"];
print("Before Array adding : ");
print_r($add_user);
print("<br/>");

print("After Array adding : ");
array_push($add_user, "user4");
print_r($add_user);
print("<br/>");

print("<hr/>");
print("<br/>");

print("<h3>Using Splice method for multiple elements it always starts from last: </h3>");
array_splice($add_user, -3,1);
print_r($add_user);
?>