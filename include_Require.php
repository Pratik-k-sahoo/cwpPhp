<?php

// include '_dbConnect.php'; //Throws warning if file not present and also throws error incase of syntax error
require '_dbConnect.php'; //Throws error if file not present and also throws error incase of syntax error

$sql = "SELECT * FROM `mytable`";
$result = mysqli_query($conn, $sql);

//Find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the database. <br>";
$count = 1;
while($row = mysqli_fetch_assoc($result)){
  echo $count . ". Hi " . $row['name'] . ", welcome to " . $row['dest'];
  echo "<br>";
  $count++;
}
?>