<!-- PROGRAM TO COUNT-DOWN AND COUT-UP THE NUMBER SEQUENCE -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <FORM action = "index.php" method ="post" align="center">
        <label>Enter a number to count to:</label><br>
        <input type="text" name = "number"><br>
        <label>Enter a number to down to:</label><br>
        <input type="text" name = "down"><br>
        <input type = "submit" value = "display">
    </FORM>
</body>
</html>


<?php
    echo "The count-up is:<br>";
    $num = $_POST["number"];
    for($i=1;$i<=$num;$i++){
        echo $i. "<br>";
    }
    echo "<br><br> The count-down is: <br>";
    $down = $_POST["down"];
    for($i=$down;$i>0;$i--){
        echo $i. "<br>";
    }
?>