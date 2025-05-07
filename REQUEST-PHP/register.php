<?php
// Print all data posted by html form //
// print_r($_REQUEST);
print("<br/>");

// Modify posted data //
// print_r("Hey! ".$_REQUEST['user_name']." Thanks for register. Remember that your password is : ".$_REQUEST['user_password']." and your email is : ".$_REQUEST['user_mail']." and you live in : ".$_REQUEST['user_address']);
print("<br/>");
print("<br/>");


// Print one by one using foreach loop //
foreach($_REQUEST as $key => $data){
    // echo $key." is :- ".$data;
    // For printing in next line, we use <br/> tag //
    print("<br/>");    
}
print("<hr/>");
print("<br/>");


// Use logic for what is request is not working //
if($_REQUEST){
    foreach($_REQUEST as $key => $data){
        echo $key." is :- ".$data;
        print("<br/>");    
    } 
}else{
    print("Request Error! ");
};

?>