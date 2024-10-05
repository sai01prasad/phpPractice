<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $name= $_GET["name"];
    //echo "<br/>";
    $email= $_GET["email"];
    //echo "<br/>";
    $mobile= $_GET["mobile"];
    //echo "<br/>";
    $password= $_GET["password"];
    //echo "<br/>";
    //$t=time();
   
    $created_at =date("Y-m-d");
    //echo $created_at;
    //$date = date("Y-m-d H:i:s");
    //echo

    function registration_success(){
      echo '<script>alert("Registered Successfully");
      location.href="login.html";
      </script>';
    }
    
    $conn = mysqli_connect("localhost", "root", "", "registration");

    /*if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";*/



    //$sql = "INSERT INTO registrationdetails (name, email, number, password) VALUES ($name,$email,$mobile,$password) ";
    
    $sql = "INSERT INTO `registrationdetails` (`name`, `email`, `number`, `password`,`created_at`) VALUES ('".$name."', '".$email."', '".$mobile."', '".$password."','".$created_at."')";

    if ($conn->query($sql) === TRUE) {
        //echo "Registration Successful";
       // echo '<script>alert("Registered Successfully")</script>';
        //header("Location:login.html");
        registration_success();
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
    $conn->close();

    ?>
</body>
</html>