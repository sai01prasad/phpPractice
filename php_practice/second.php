<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <?php 
    
    //taking input from user
   // $variable= readline("Enter a string");
   // echo $variable;

    //declaring a class
    class Fruit{

        public $name;
        public $colour;

        

        function setName($name)
        {
            $this->name=$name;
        }
        function setColour($colour)
        {
            $this->colour=$colour;
        }
        function getName()
        {
            return $this->name;
        }
        function getColour()
        {
            return $this->colour;
        }


    }

    //creating object for class fruit
    $apple = new Fruit();
    //accessing methods in the class using object
    $apple->setName("apple");
    $apple->setColour("red");
    echo $apple->getName()."<br/>";
    echo $apple->getColour()."<br/>";

    //withour using methods of the class, we can provide values to the variables inside the class
    $orange = new Fruit();
    $orange->name = "orange";
    //echo $orange->name;
    $orange->setName("tangerine");
    $orange->setColour("orange");
    echo $orange->name;
    echo "<br/>";
    echo $orange->colour;
    echo "<br/>";

    //creating a class with constructor
    class Car{

        public $brand;
        public $colour;

        //constructor starts with two underscores(__)followed by construct() and arguments
        function __construct($brand,$colour)
        {
            $this->brand = $brand;
            $this->colour = $colour;
        }

    }

    //creating object for Car class
    $bmw = new Car("bmw","red");
    echo $bmw->brand;
    echo "<br/>";
    echo $bmw->colour;
    echo "<br/>";

    //creating a class with destructor
    //destructor is a method Starts with two underscores (__) followed by destruct()
    //this destruct method will execute at the end of the Script
    class Car1{

        public $brand;
        public $colour;

        //constructor starts with two underscores(__)followed by construct() and arguments
        function __construct($brand,$colour)
        {
            $this->brand = $brand;
            $this->colour = $colour;
        }

        function __destruct()
        {
            echo "This Car Brand is $this->brand and Colour is $this->colour";
        }

    }

    //creating object for class Car1
    $bugati = new Car1("BUGATI","Black");

    //Access Modifiers
    //public - this is the default one , any method or variable declared with this can be acccessed anywhere 
    //protected - these can be accessed only in the child classes
    //private - these can be accessed within the same class only.

    //Inheritance
    //when a class derived from other class
    //the derived/child class will inherit all the public and protected properties and methods from the parent/super class
    
    class Cars{

        public $name;
        public $colour;

        //constructor starts with two underscores(__)followed by construct() and arguments
        public function __construct($name,$colour)
        {
            $this->name = $name;
            $this->colour = $colour;
        }
        public function carsModel()
        {
            echo "The car model is $this->name <br/>";
        }
        protected function carsColour()
        {
            echo "The car colour is $this->colour <br/>";
        }
        public function carDetails()
        {
            echo "The car is $this->name and colour is $this->colour";
        }

    }
    class MaruthiSuzuki extends Cars {
       
        public function colour()
        {
             $this->carsColour();
        }

    }
    $maruthi = new MaruthiSuzuki("swift","white");
    $maruthi->carsModel();
   // echo $maruthi->carColour();  this will throws an error
   //to use protected methods of parent class we have to create method inside child in which we will call the protected method of parent class
    $maruthi->colour();

    //overriding inherited methods

    class Volvo extends Cars{
        public $price;
        public function __construct($name,$colour,$price)
        {
            $this->name = $name;
            $this->colour = $colour;
            $this->price = $price;
        }
        public function carDetails()
        {
            echo "The car is $this->name and colour is $this->colour and price is $this->price";
        }
    }

    $honda = new Volvo("city","blue",1000000);
    $honda->carDetails();
    echo "<br/>";

    //final keyword
    //when we declare a class with final, it can't be inherited
    //when we declare a method with final, it can't be overloaded

    //class constants
    //we us these when we need to declare a constant data inside our class
    //a class constant is declared inside a class using the keyword "const"
    //a const can't be changed once it's declared
    //classs constants are case-sensitive 
    //recomended to use all uppercase letters for constants
    //we can access these constants outside the class using the (::) scope resolution operator
    //class name followed by (::) scope resolution operator and const_name
    //to use it inside the same class use self keyword followed by (::) and const_name

    class Goodbye {
        const LEAVING_MESSAGE = "Thank you for visiting ";
        public function message()
        {
            echo self::LEAVING_MESSAGE;
        }
      }
      
    echo Goodbye::LEAVING_MESSAGE;
    echo "<br/>";
    $bye = new Goodbye();
    $bye->message();
    echo "<br/>";

    //Abstract classes
    //abstract classes and methods
    //the classes which contain atleast one abstract method 
    //An abstract method is a method which is declared but not implemented
    //Abstract classes and methods are declared with the keyword abstract followed by the class/method name
    abstract class Vehicle{

        public $vehicleType;
        abstract function vehicleDiscription($vehicleType);
       

    }

    class TwoWheeler extends Vehicle{
        function vehicleDiscription($vehicleType){
            echo "This vehicle is a $vehicleType";
        }
    }

    $twowheels = new TwoWheeler();
    $twowheels->vehicleDiscription("Two-Wheeler");
    echo "<br/>";

    //Interfaces
    //Interfaces allows us to specify what methods a class should implement.
    //When one or more classes use the same interface, it is referred to as "polymorphism".
    //Interfaces cannot have properties and  methods must be public
    //by default all the methods in the interface are abstract. So, no need to use abstract keyword
    //Interfaces are declared with the interface keyword
    //To implement an interface, a class must use the implements keyword.

    interface Animal {
        public function makeSound();
    }
      
    class Cat implements Animal {
        public function makeSound() {
          echo "Meow";
        }
    }
      
    $animal = new Cat();
    $animal->makeSound();
    echo "<br/>";

    //static methods
    //these can be called directily without creating an instance(object) of the class first
    //these are declared with the keyword static 
    // to access the static method use class_name followed by (::)and then method name
    class Greetings{
        public static function welcome()
        {
            echo "Welcome Everyone";
        }
    } 
    Greetings::welcome();
    echo "<br/>";

    class Wishes{
        public function wishing()
        {
            Greetings::welcome();
        }
    }

    $hello = new Wishes();
    $hello->wishing();
    echo "<br/>";
    


    ?>
</body>
</html>