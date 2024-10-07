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
    $department= $_GET["department"];
    //echo "<br/>";
    $address= $_GET["address"];
    //echo "<br/>";
    //$password= $_GET["password"];
    //echo "<br/>";
    //$t=time();
   
    $created_at =date("Y-m-d H:i:s");
    //echo $created_at;
    //$date = date("Y-m-d H:i:s");
    //echo

    function add_success(){
      echo '<script>alert("Added Successfully");
      location.href="home.php";
      </script>';
    }
    
    //$conn = mysqli_connect("localhost", "root", "", "employee");
    include "dbconnection.php";
    //include "sqlqueries.php";

    /*if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";*/



    //$sql = "INSERT INTO registrationdetails (name, email, number, password) VALUES ($name,$email,$mobile,$password) ";
    
    $sql = "INSERT INTO `employeedetails` (`employee_name`, `employee_dept`, `employee_address`,`created_at`) VALUES ('".$name."', '".$department."', '".$address."','".$created_at."')";

    if ($conn->query($sql) === TRUE) {
       // echo "Added Successful";
       // echo '<script>alert("Registered Successfully")</script>';
        //header("Location:login.html");
        add_success();
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
    $conn->close();

    ?>
</body>
</html>