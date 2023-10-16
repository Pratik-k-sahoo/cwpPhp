<?php

    //Operators in PHP
    /*
    1. Arithmetic Operator
    2. Assignment Operator
    3. Comparison Operator
    4. Logical Operator
    */

    //Arithmetic Operator
    $a = 45;
    $b = 8;
    echo "For a + b, the result is " . ($a+$b) . ".<br>";
    echo "For a - b, the result is " . ($a-$b) . ".<br>";
    echo "For a * b, the result is " . ($a*$b) . ".<br>";
    echo "For a / b, the result is " . ($a/$b) . ".<br>";
    echo "For a % b, the result is " . ($a%$b) . ".<br>";
    echo "For a ** b, the result is " . ($a**$b) . ".<br>";

    //Assignment Operator
    $x = $a;
    echo "For x, the value is " . $x . ".<br>";
    $x += $a;
    echo "For x, the value is " . $x . ".<br>";
    $x -= $a;
    echo "For x, the value is " . $x . ".<br>";
    $x *= $a;
    echo "For x, the value is " . $x . ".<br>";
    $x /= $a;
    echo "For x, the value is " . $x . ".<br>";
    $x %= $a;
    echo "For x, the value is " . $x . ".<br>";

    //Comparison Operator
    $x = 7;
    $y = 9;
    echo "For x == y, the value is " . var_dump($x == $y) . ".<br>";
    $x = 7;
    $y = 8;
    echo "For x == y, the value is " . ($x == $y) . ".<br>";
    echo "For x > y, the value is " . var_dump($x > $y) . ".<br>";
    echo "For x < y, the value is " . var_dump($x < $y) . ".<br>";
    echo "For x <> y, the value is " . var_dump($x <> $y) . ".<br>"; //Not equal to

    //Logical Operator
    $m = true;
    $n = false;

    echo "For m and n, the result is ";
    echo var_dump($m and $n);
    echo ".<br>";

    echo "For m && n, the result is ";
    echo var_dump($m && $n);
    echo ".<br>";

    echo "For m or n, the result is ";
    echo var_dump($m or $n);
    echo ".<br>";

    echo "For m || n, the result is ";
    echo var_dump($m || $n);
    echo ".<br>";

    echo "For !m, the result is ";
    echo var_dump(!$m);
    echo ".<br>";

?>