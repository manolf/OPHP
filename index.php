<?php

declare(strict_types=1); //1= true, 0=false

//autoload classes instead of single include-files!
include "./includes/autoloader.inc.php";

// include "./includes/person.inc.php";
// include "./includes/newclass.inc.php";
// include "./includes/house.inc.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>
    </title>
</head>

<body>
    <!-- <#?php //CHAPTER 3 and 4 include "./includes/pet.inc.php" ; // $pet01=new Person(); $pet01=new Pet(); echo $pet01->owner();

        //will just work with public attribut or public method
        // $pet01 = new Person();
        // echo $pet01->first;

        ?> -->

    <?php
    //CHAPTER 5
    // $person1 = new Person();
    // $person1->setName("Manu");
    // echo $person1->name; //name = property, not variable

    // $person2 = new Person();
    // $person2->setName("Gustav");
    // echo $person2->name;


    //CHAPTER 6
    // $person1 = new Person("Manu", "blue", 42);

    // //seems to work also with private attributes;
    // var_dump($person1);

    // //works if attributes are public
    // // echo $person1->name;
    // // echo $person1->eyeColor;
    // //echo $person1->age;

    // // $person1->setName("Morgenröte");
    // // var_dump($person1);

    // //using private attributes with public function getName()
    // echo $person1->getName();


    //CHAPTER 7: delete Objects

    // $object = new newClass();
    // unset($object);
    // echo $object->getProperty();


    //CHAPTER 8: static Properties and Methods
    //Aufruf ohne Objekt
    // echo Person::$drinkingAge;
    // Person::setDrinkingAge(18);
    // // echo Person::getDrinkingAge();
    // echo Person::$drinkingAge;

    // //Aufruf mit Objekt
    // $person1 = new Person("Gustavo", "black", 33);
    // echo $person1->getDrinkingAge();


    //CHAPTER 9: Load Classes Automatically
    // $autoload1 = myAutoLoader(Person); // use strtolower in autoloader.inc.php
    // echo $autoload1 . "<br>";
  

/*     $person1 = new Person("Gustavo", "black", 33);
    echo $person1->getPerson();

    echo "<br>";

    $house1 = new House("Highway to Hell", 12);
    echo $house1->getAddress(); */

    // CHAPTER 10: Typedeclaration: setName(string $newName)
    // $person1 = new Person();

    // try {
    //     $person1->setName("2"); //now it is just accepted with "2"
    //     echo $person1->getName();
    // } catch (TypeError $e) {
    //     echo "Error!: " . $e->getMessage();
    // }


    //CHAPTER 14: abstract classes 
    //no objects from this class

    // include_once "abstract/paymenttypes.abstract.php";
    // include_once "classes/BuyProduct.class.php";

    // $buyProduct = new BuyProduct();
    // echo $buyProduct->getPayment();


    //Chapter 15: anonymous classes

    //Regular Class

/*     include_once "classes/simpleclass.class.php";

    $obj = new SimpleClass();
    $obj->helloWorld();

    //Anonymous class
    //less heavy to load
    $newObj = new class(){
        public function helloWorld(){
            echo "Hello World";
        }
    };

    $newObj->helloWorld(); */


    //Chapter 16: connection to DB with DPO
    //protected: auch die erbenden Klassen können darauf zugreifen
    // see dbh.class.php and test.class.php

    //Chapter 17
    //Query a Database: get and set

/*     $testObj = new Test();
    $testObj->getUsers();

    echo "<hr>";

    $testObj2 = new Test();
    $testObj2->getUsersStmt("Daniel","Nielsen");

    $testObj3 = new Test();
    $testObj3->setUsersStmt("Manuela", "Damersdottir", "1978-09-14"); */


    //Chapter 18: applying the mvc model 
    // model file: users.class.php --> just database connections
    // view file: usersview.class.php --> shows Information
    // controller file: userscontr.class.php -> updates information
    //split the testfile into these 3 files 

    // $usersObj = new UsersView();
    // $usersObj-> showUser("Manuela");

    // $usersObj2 = new UsersContr();
    // $usersObj2-> createUser("Cordula", "Grün", '1980-09-09');

    //Chapter 19: 



    ?>

</body>

</html>