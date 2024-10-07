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
     function edit_confirmation(){
        echo '<script>alert("Do you want to Edit Employeee Details");
       
        </script>';
      }
    //edit_confirmation();
    ?>
    

<form action="bdedit.php" method="GET">
     Name* :      <input type="text" name="name" value="<?php echo $_SESSION["empname"]; ?>"> <br/>
     Department*:      <input type="text" name="department"  value="<?php echo $_SESSION["empdept"]; ?>"><br/>
     Address*:     <input type="text" name="address"  value="<?php echo $_SESSION["empaddress"]; ?>"><br/>
     
     <input type="submit">

</form>
    <?php //echo $_SESSION["empname"]; ?>
</body>
</html>