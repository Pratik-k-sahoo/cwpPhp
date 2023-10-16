<?php
    $name = "Pratik";
    $income = 200;

    // PHP Data Types

    /*
    1. String
    2.Integer
    3.Float
    4.Boolean
    5.Object
    6.Array
    7.Null
    */

    //String:- Sequence of characters
    $name = "Rohan";
    $friend = 'Ram';

    echo "$name's friend is $friend";echo "<br>";

    //Integer:- Non decimal number
    $income = 454;
    $debt = -55;

    echo $income;
    echo "<br>";
    echo $debt;
    echo "<br>";

    //Float:- Decimal Number
    $income = 344.5;
    $debt = -45.5;

    echo $income;
    echo "<br>";
    echo $debt;
    echo "<br>";

    //Booleans: Can be either true or false
    $x = true;
    $is_friend = false;
    echo $x;
    echo "<br>";
    echo $is_friend;
    echo "<br>";
    echo var_dump($x);
    echo "<br>";
    echo var_dump($is_friend);
    echo "<br>";
    
    //Object: Instances of Classes
    //Employee is a class ---> Pratik can be one object

    //Array:- Used to store multiple values in a single variable
    $friend = array("Subham", "Sutej", "Rohit", "Shaswat");
    echo var_dump($friend);
    echo "<br>";
    echo $friend[0];
    echo "<br>";
    echo $friend[1];
    echo "<br>";
    echo $friend[2];
    echo "<br>";
    echo $friend[3];
    echo "<br>";

    //Null
    $name = NULL;
    echo $name;
    echo "<br>";
    echo var_dump($name);
?>