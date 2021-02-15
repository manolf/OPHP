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
    // $person1 = new Person("Gustavo", "black", 33);
    // echo $person1->getPerson();

    // echo "<br>";

    // $house1 = new House("Highway to Hell", 12);
    // echo $house1->getAddress();

    //CHAPTER 10: Typedeclaration: setName(string $newName)
    // $person1 = new Person();

    // try {
    //     $person1->setName("2"); //now it is just accepted with "2"
    //     echo $person1->getName();
    // } catch (TypeError $e) {
    //     echo "Error!: " . $e->getMessage();
    // }


    //CHAPTER 14: abstract classes 
    include_once "abstract/paymenttypes.abstract.php";
    include_once "classes/BuyProduct.class.php";

    $buyProduct = new BuyProduct();
    echo $buyProduct->getPayment();


    ?>

</body>

</html>