<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Edit</title>
</head>
<body>
    
    <?php 

    function edit_success(){
    echo '<script>alert("Employee Details Updated Successfully");
    location.href="home.php";
    </script>';
    }

    $id = $_SESSION["empid"];
    $name = $_GET["name"];
    $dept = $_GET["department"];
    $address = $_GET["address"];
    //$conn = mysqli_connect("localhost", "root", "", "employee");
    include "dbconnection.php";
    //include "sqlqueries.php";
    $sql = "UPDATE `employeedetails` SET `employee_name`='". $name."',`employee_dept`='".$dept."',`employee_address`='".$address."' WHERE `employee_id`='".$id."'";
    if($conn->query($sql))
    {
        //echo "Employee Details updated Successfully";
        edit_success();
    }
    else{
        echo "Error updating record: " . $conn->error;
    }
    ?>
 <?Php //echo $_GET["name"]; ?>
</body>
</html>