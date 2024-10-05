<?php 
//creating session
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

    $user_name=$_GET["name"];
    $user_password=$_GET["password"];
    //echo $user_name;
    //echo $user_password;

    $_SESSION["name"] =$user_name;
    $_SESSION["password"] =$user_password;


    function login_success(){
        echo '<script>alert("Login Successfully");
        location.href="homepage.php";
        </script>';
      }

    //creating database connection
    $conn = mysqli_connect("localhost", "root", "", "registration");
   /* if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }*/
    //echo "Connected successfully";
    $sql = "SELECT  `name`, `password` FROM `registrationdetails`";
    $result = $conn->query($sql);

    //iterating result
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            //echo "name:".$row["name"]."password:".$row["password"];
            if (strcmp(strtolower($user_name),strtolower($row["name"])) && (strcmp($user_password,$row["password"])))
            {
                //echo "Login Successfull";
                //header("Location:registration.html");
                login_success();
                break;
            }
            
        }
    }
    ?>
</body>
</html>