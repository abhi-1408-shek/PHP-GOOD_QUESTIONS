<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country Capital Finder </title>
</head>
<body>
    <form action="country_finder.php" method="post" align="center">
        <label>Enter the country name:</label><br>
        <input type="text" name="name">
    </form>
</body>
</html>

<?php
$capitals = array("USA" => "Washington D.C",
                    "Japan" => "Tokyo",
                    "South Korea" => "Seoul",
                    "India" => "New Delhi",
                    "China" => "Beijing");
$name = $_POST["name"];

    echo"The capital is: {$capitals[$name]}";

?>