<?php

    //Connecting to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbpratik";

//Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

//Die if connection was not successful
if(!$conn){
    die("Sorry we failed to connect: " . mysqli_connect_error()) . "<br>";
}else{
    echo "Connection was successful <br>";
}

//Create a table in database
$sql = "INSERT INTO `mytable` (`name`, `dest`) VALUES ('Prateek', 'Chennai');";

$result = mysqli_query($conn, $sql); //Returns true or false (if database created successfully then returns true else if it already exist or any other problem it returns false)

//Check for the table creation success
if($result){
    echo "The record has been inserted successfully.";
}else{
    echo "The record has not been inserted successfully because of this error --> " . mysqli_error($conn);
}

?>