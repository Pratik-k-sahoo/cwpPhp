<?php

//Connecting to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "contactus";

//Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

//Die if connection was not successful
if(!$conn){
    die("Sorry we failed to connect: " . mysqli_connect_error());
}else{
    echo "Connection was successful <br>";
}

$sql = "SELECT * FROM `contacts`";
$result = mysqli_query($conn, $sql);

//Find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the database. <br>";

//Display the rows returned by the sql query
if($num > 0){
    // $row = mysqli_fetch_assoc($result);   //mysqli_fetch_assoc()-> returns the next row and till null comes
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    //We can fetch in a better way using the while loop
    // while($row = mysqli_fetch_assoc($result)){
    //     echo var_dump($row);
    //     echo "<br>";
    // }

    //With a message means using elements from array
    while($row = mysqli_fetch_assoc($result)){
        echo $row['sno'] . ". Hello " . $row['name'] . '! Welcome to the world of concern. Your concern i.e. "' . $row['concern'] . '" on ' . $row['date'] . " has been resolved successfully.";
        echo "<br>";
    }

}
?>