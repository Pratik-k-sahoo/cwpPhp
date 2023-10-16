<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="test.php" method="get">

    Month: <input type="text" placeholder="Month in number" name="name">
    Year: <input type="text" placeholder="Enter Year" name="year">
    <input type="submit">
    </form>
    <br>
    <?php

    $num = $_GET["name"];
    switch($num){
        case 1: echo "Jan -> 31";
                break;
        case 2: $year = $_GET["year"];
                if($year % 4 == 0) echo "Feb -> 29";
                else echo "Feb -> 28";
                break;
        case 3: echo "Mar -> 31";
                break;
        case 4: echo "Apr -> 30";
                break;
        case 5: echo "May -> 31";
                break;
        case 6: echo "Jun -> 30";
                break;
        case 7: echo "Jul -> 31";
                break;
        case 8: echo "Aug -> 31";
                break;
        case 9: echo "Sep -> 30";
                break;
        case 10: echo "Oct -> 31";
                break;
        case 11: echo "Nov -> 30";
                break;
        case 12: echo "Dec -> 31";
                break;
    }
    ?>

</body>
</html>