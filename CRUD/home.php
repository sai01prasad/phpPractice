<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    
    <link rel="stylesheet" href="style.css" />
</head>
<body>


    <?php 
    $page = $_GET["page"];
    $start = 0 + 5 * ($page - 1);
    $rows = 5;
    //$sql = "SELECT ... FROM table WHERE ... LIMIT $start, $rows";


    //$conn = mysqli_connect("localhost", "root", "", "employee");
    include "dbconnection.php";
    //include "sqlqueries.php";
    $sql = "SELECT `employee_id`, `employee_name`, `employee_dept`, `employee_address` FROM `employeedetails` LIMIT ".$start.", ".$rows."";
    $result = $conn->query($sql);

    

/*    while($row = $result->fetch_assoc())
    {
        echo $row["employee_id"];
    }
*/

    ?>
    
    <table id="myTable" class="display">
        <tr>
            
            <th><b>EmployeeName</b></th>
            <th><b>EmployeeDepartment</b></th>
            <th><b>EmployeeAddress</b></th>
            <th><b>Edit</b></th>
            <th><b>Delete</b></th>
        </tr>
    <?php
    if($result->num_rows > 0)
    {
       
        while($row = $result->fetch_assoc())
        {
            ?>
            <tr>
                
                <td><?php echo $row["employee_name"] ?></td>
                <td><?php echo $row["employee_dept"] ?></td>
                <td><?php echo $row["employee_address"] ?></td>
                <td><a href="edit.php" onclick="return confirm('Are you sure want to Edit');">Edit  <?php $_SESSION["empname"]=$row["employee_name"];
                                                   $_SESSION["empdept"]=$row["employee_dept"];
                                                   $_SESSION["empaddress"]=$row["employee_address"];
                                                   $_SESSION["empid"]=$row["employee_id"]; ?>  </a></td>
                <td><a href="delete.php" onclick="return confirm('Are you sure want to delete');">Delete <?php $_SESSION["delempid"]=$row["employee_id"]; ?> </a></td>
            </tr>
            
            <?php
        }
        ?>
    </table>
       
        <?php
    }
 
    ?>
    <ul>
        <li><a href="home.php?page=1"> 1</a></li>
        <li><a href="home.php?page=2"> 2</a></li>
        <li><a href="home.php?page=3"> 3</a></li>
    </ul>
    <br>
    <br>
    <b>To add Employee click below</b><br>
    <button><a href="add.html">Add</a></button>

</body>
</html>