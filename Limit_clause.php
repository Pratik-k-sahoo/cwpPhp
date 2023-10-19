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
    die("Sorry we failed to connect: " . mysqli_connect_error());
}else{
    echo "Connection was successful <br>";
}


$sql = "DELETE FROM `mytable` WHERE `dest` = 'Chenna' LIMIT 6";
$result = mysqli_query($conn, $sql);
$aff = mysqli_affected_rows($conn);
echo "Affected rows are: $aff <br>";

if($result){
    echo "Deleted successfully";
}else{
    $err = mysqli_error($conn);
    echo "Not deleted successfully due to $err";
}
?>