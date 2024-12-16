<!-- PROGRAM TO STOP THE INFINITE COUNTING -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="stop.php" method="post" align = "center">
       
        <input type="submit" name= "stop" value="stop">
    </form>
</body>
</html>

<?php

$running = true;
$seconds = 0;

while($running){


    if(isset($_POST["stop"])){
        $running = false;
    }
    else{
        $seconds++;
        echo "{$seconds} <br>";
    }
    
}
?>