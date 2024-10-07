<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>confirmation Window</title>
</head>
<body>
    <?php  
    function test_confirmation(){
        echo '<script>alert("Do you want to Edit Employeee Details");
        location.href="edit.php";
        </script>';
    }

    function test()
    {
        echo '<script>
        if (window.confirm("Do you really want to leave?")) {
            window.open("home.php", "Thanks for Visiting!");
            }
        </script>';
    }
    //test();

    

    ?>
    <input type="button" value="Rate Request" onclick="return confirm('Are you sure want to delete');" />
    <a href="home.php" onclick="return confirm('Are you sure want to delete');">home</a>


</body>
</html>