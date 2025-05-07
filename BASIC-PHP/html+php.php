<?php
echo "<hr/>";
 print "-------------PHP WITH HTML--------------";
 echo "<hr/>";
 echo "<br/>";
 // Let's write HTML in PHP //
 print "<h1>Let's Write HTML in PHP with heading 1 tag.<h1/>";
 echo "<br/>";
 print "<h1 style = 'color:red; text-align: center'>Now add some styling into it.<h1/>"

?>

<!-- We can also add multiple tags of PHP  -->
 <div class="flex-div" style="display: flex; justify-content:space-between; gap:30px; border: 2px solid black; border-radius: 10px; padding:10px;">
    <style>
        div h3{
            border: 2px solid green;
            padding: 10px 20px;
        }
    </style>
 <?php
$name = "Vishal";
$age = 5*4+2;
$profession = "Developer";
echo "<h3 style = 'color:blue'>My name is [ $name ].</h1>";
echo "<h3 style = 'color:green'>My age is [ $age ].</h1>";
echo "<h3 style = 'color:aqua'>I am a [ $profession ].</h1>";

 ?>
</div>

<!-- Now write PHP in HTML  -->

<h1>
    <?php
    print "$name, "; print "$age, " ; print "$profession";
    ?>
</h1>