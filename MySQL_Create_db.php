<?php

    /*
    Ways to connect to a MySQL database
        1.MySQLi extension
            a)Procedural
            b)Object Oriented
        2.PDO(PHP Data Object)
*/

//Connecting to the database
$servername = "localhost";
$username = "root";
$password = "";

//Create a connection
$conn = mysqli_connect($servername, $username, $password);

//Die if connection was not successful
if(!$conn){
    die("Sorry we failed to connect: " . mysqli_connect_error()) . "<br>";
}else{
    echo "Connection was successful <br>";
}

//Create a database
$sql = "CREATE DATABASE dbpratik";
$result = mysqli_query($conn, $sql); //Returns true or false (if database created successfully then returns true else if it already exist or any other problem it returns false)

//Check for the database creation success
if($result){
    echo "The DB was created successfully.";
}else{
    echo "The DB was not created successfully because of this error --> " . mysqli_error($conn);
}
?>