<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<body>
    <h1>Make a table add data from php</h1>
<br>

    <?php
    $users = [
        [1, "Vishal", "Palampur"],
        [2, "Akshay", "Solan"],
        [3, "Rahul", "Mandi"],
        [4, "Peter", "America"],
        [5, "Tony", "Dubai"],
    ];

print "<table border = '1'>";

    for($i = 0; $i<count($users); $i++){
print "<tr>";        
        for($j = 0; $j<count($users[$i]); $j++){
print "<td>";             
            print(($users[$i][$j]));
            // print "<br/>";
print "</td>"; 
        }
print "</tr>";        
    }
print "</table>";    


    ?>
</body>
</html>