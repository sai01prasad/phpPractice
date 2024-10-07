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
    function delete_confirmation(){
        echo '<script>alert("Do you want to Delete Employeee ");
       
        </script>';
      }
    //delete_confirmation();

    function delete_success(){
        echo '<script>alert(" Deleted Employeee Successfully ");
        location.href="home.php";
       
        </script>';
      }
    include "dbconnection.php";
    //include "sqlqueries.php";

    $deleteempid = $_SESSION["delempid"];
    //$conn = mysqli_connect("localhost", "root", "", "employee");
    $sql = "DELETE FROM `employeedetails` WHERE `employee_id`='".$deleteempid."' ";
    if($conn->query($sql))
    {
        //echo "Employee Details updated Successfully";
        delete_success();
    }
    else{
        echo "Error updating record: " . $conn->error;
    }

    
    ?>
</body>
</html>