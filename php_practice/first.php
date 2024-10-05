<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Php</title>
</head>
<body>
    
    <?php

    $colour = "red";
    $Colour="blue";
    $COLOUR="green";
    echo "hello world ".$colour."<br/>";
    //echo "hello world".$Colour;
    //echo "hello world".$COLOUR;

    $z = $x = 5;
    $y = 10;


    echo $x+$y."<br/>";
    //echo $z;

    //var_dump() is used to find the data type of variable or value
    //var_dump(5);
    //var_dump($colour);
    //var_dump($x);
    //var_dump(false);
    //var_dump([2, 3, 56]);
    //var_dump(NULL);


    $int = 10;
    $double = 20.36;

    echo $int+$double;

   

   

   /* function min($num)
    {
        echo "minimun is ".$num;
    }

    min(20); */

   /* function setHeight($minheight = 50) 
    {
        echo "The height is : $minheight <br>";
    }

    setHeight(30);*/

    //while loop

    $i = 1;
    while ($i < 6) 
    {
        echo "$i <br/>";
        $i++;
    }


    //for loop

    for ($x = 0; $x <= 5; $x++) 
    {
        echo "The number is: $x <br>";
    }

    //foreach loop

    //indexed Array
    $numbers = array("one","two","three","four","five");

    foreach($numbers as $x)
    {
        echo "$x <br/>";
    }

    //Associated Array
    $details = array("name"=>"abc","age"=>22,"place"=>"vizag");

    foreach($details as $x=>$y)
    {
        echo "$x : $y <br/>";
    }


    //functions
    //built_in functions 
    //user defined functions

    //starts with keyword "function" followed by the function_name
    //function_name must start with a letter or a underscore and names are not case_sensitive
    function hello()
    {
        echo "hello world";
    }

    hello();


    //functions with arguments
    function add($a,$b)
    {
        echo $a+$b;
    }
    add(5,6);


    //function with default argument value
    function setHeight($minheight = 50) 
    {
        echo "The height is : $minheight <br>";
    }

    setHeight(30);
    setHeight();

    //function with return values
    function add1($a,$b)
    {
        return $a+$b;
    }
    $addition = add1(5,8);
    echo "$addition <br/>";
    echo add1(5,5)."<br/>";

    //function with passing arguments as reference
    //in these funtions the arguments can be passed only as variables($variable_name) not the actual values(1,"abcd")
    function add_five(&$val) {
        $val += 5;
      }
      
    $num = 2;
    add_five($num); 
    //echo add_five($num); here it won't print anything as the function doesn't have any return or print (echo) statements
    echo "$num <br/>";

    //function with unknown number of arguments
    function allAdd(...$x)
    {
        $sum1=0;
        $length = count($x);
        for($i=0;$i<$length;$i++)
        {
            $sum1 = $sum1+$x[$i];
        }
        return $sum1;
    } 
    echo allAdd(1,2,3,4,5,6,7,8,9)."<br/>";

    //Arrays

    //indexed Arrays
    //Associative Arrays
    //Multidimensional Arrays

    $numbers1 = array("one","two","three","four","five");
    echo count($numbers1);


    $cars = array (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
      );
    
    ?>
    <p> <?php echo $cars[0][0]; ?> </p>

    
    <table border=2>
      <tr>
        <th>Brand</th>
        <th>Model_Number</th>
        <th>Quantity</th>
      </tr>
      <?php 
      foreach($cars as $car)
      {
        ?>
        <tr>
       <?php foreach($car as $details)
        {
            ?>
            <td><?php
            echo $details;
            ?>
            </td> 
            <?php
        }
        ?>
        </tr>
       <?php
      }
      ?>

    </table>

</body>
</html>