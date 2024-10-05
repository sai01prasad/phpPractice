<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    //date() is used to format a date and/or time
   /* date_default_timezone_set("Asia/Kolkata");
    echo "Today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("Y-m-d") . "<br>";
    echo "Today is " . date("Y.m.d") . "<br>";
    echo "Time is " . date("h:i:sa") . "<br>";
    */
    //echo readfile("D:/test.txt");

   /* $myfile = fopen("D:/test.txt", "r") or die("Unable to open file!");
    echo fread($myfile);
    fclose($myfile);*/

    //$myfile = fopen("D:/test.txt", "r");
    //echo fgets($myfile);
   /* while(!feof($myfile)) {
        //echo fgets($myfile) . "<br>";
        echo fgetc($myfile) . "<br>";
      }
    fclose($myfile);*/

   /* $myfile = fopen("D:/test.txt", "w") or die("Unable to open file!");
    $txt = "John Doe\n";
    fwrite($myfile, $txt);
    $txt = "Jane Doe\n";
    fwrite($myfile, $txt);
   // while(!feof($myfile)) {
       // echo fgets($myfile) . "<br>";
        //echo fgetc($myfile) . "<br>";
      //}
    fclose($myfile);*/

    /*$myfile = fopen("D:/test.txt", "w") or die("Unable to open file!");
    $txt = "hello world\n";
    fwrite($myfile, $txt);
    $txt = "hello world\n";
    fwrite($myfile, $txt);
    fclose($myfile);*/

    $myfile = fopen("D:/test.txt", "a") or die("Unable to open file!");
    $txt = "Naruto Uzunaki\n";
    fwrite($myfile, $txt);
    $txt = "Sasuke Uchiha\n";
    fwrite($myfile, $txt);
    fclose($myfile);


    ?>
</body>
</html>