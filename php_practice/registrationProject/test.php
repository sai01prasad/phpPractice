<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $date = date("Y-m-d H:i:s");
    $date2 = date("Y-m-d");
    echo $date;
    echo $date2;
    //echo '<script>alert("Registered Successfully")</script>';

    function registration_success(){
        echo '<script>alert("Registered Successfully");
        location.href="login.html";
        </script>';
      }

    registration_success();

    //header("Location:login.html");
    ?>
</body>
</html>