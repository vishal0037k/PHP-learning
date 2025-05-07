<?php
print "<h1>Function in php <h1/>";
print "<br/>";
print "Block of reusable code is function let's make a calculator function for two values.<br/>";

function calculator($a, $b)
{
    print "<hr>";
    print "Add : " . $a + $b;
    print "<br/>";
    print "Sub : " . $a - $b;
    print "<br/>";
    print "Mul : " . $a * $b;
    print "<br/>";
    print "Div : " . $a / $b;
    print "<br/>";
    print "Mod : " . $a % $b;
    print "<br/>";
    print "<hr>";
}
calculator(10, 3);
calculator(2, 4);
