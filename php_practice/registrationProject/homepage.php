<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    print_r($_SESSION);

   /* echo "Favorite color is " . $_SESSION["name"] . ".<br>";
    echo "Favorite animal is " . $_SESSION["password"] . ".";*/

    
    echo "This is home page";
    
    ?>
</body>
</html>