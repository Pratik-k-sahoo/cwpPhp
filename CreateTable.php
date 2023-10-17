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
$sql = "CREATE TABLE `myTable` (`sno` INT(6) NOT NULL AUTO_INCREMENT, `name` VARCHAR(12) NOT NULL, `dest` VARCHAR(6) NOT NULL, PRIMARY KEY (`sno`))";

$result = mysqli_query($conn, $sql); //Returns true or false (if database created successfully then returns true else if it already exist or any other problem it returns false)

//Check for the table creation success
if($result){
    echo "The table was created successfully.";
}else{
    echo "The table was not created successfully because of this error --> " . mysqli_error($conn);
}

?>