<?php
    //set session function
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        echo "My favorite color is " . $_SESSION["favcolor"] . "</br>";
        echo "MY favorite animal is " . $_SESSION["favanimal"] . "</br>";
    ?>
</body>
</html>