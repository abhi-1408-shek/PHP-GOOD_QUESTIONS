<!-- CALCULATING THE CIRCUMFERENCE, AREA AND VOLUME OF CIRCLE FROM IT'S RADIUS -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "circle.php" method = "post" align="center">
        <label>Radius:</label><br>
        <input type = "text" name = "radius"><br>
        
        <input type = "submit" value = "Calculate">
    </form>
</body>
</html>


<?php
    $x = $_POST["radius"];
    $circumference = 2 * pi() * $x;
    $circumference = round($circumference,2);
    $area = pi() * pow($x,2);
    $area = round($area,2);
    $volume = 4/3 * pi() * pow($x,3);
    $volume = round($volume ,2);
    echo "The circumference of circle is: {$circumference} <br>"; 
    echo "The area of circle is: {$area} <br>"; 
    echo "The volume of circle is: {$volume}"; 
?>