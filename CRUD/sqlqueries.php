<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sql Queries</title>
</head>
<body>
    <?php 
    $created_at =date("Y-m-d H:i:s");
    $sql_select = "SELECT `employee_id`, `employee_name`, `employee_dept`, `employee_address` FROM `employeedetails`";
    //$sql_insert = "INSERT INTO `employeedetails` (`employee_name`, `employee_dept`, `employee_address`,`created_at`) VALUES ('".$name."', '".$department."', '".$address."','".$created_at."')";
    //$sql_update = "UPDATE `employeedetails` SET `employee_name`='". $name."',`employee_dept`='".$dept."',`employee_address`='".$address."' WHERE `employee_id`='".$id."'";
    //$sql_delete = "DELETE FROM `employeedetails` WHERE `employee_id`='".$deleteempid."' ";
    ?>
</body>
</html>