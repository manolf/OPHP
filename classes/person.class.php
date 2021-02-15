<?php

class Person
{
    //Properties
    private $name;
    private $eyeColor;
    private $age;

    public static $drinkingAge = 21;

    //Constructor
    public function __construct($name, $eyeColor, $age)
    {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
    }

    //Chapter10
    // public $name;
    // public $eyeColor;
    // public $age;

    //Methods
    public function setName(string $newName)
    {
        $this->name = $newName;
    }

    public function getName()
    {
        return $this->name;
    }


    public function getDrinkingAge()
    {
        return self::$drinkingAge;
    }

    public static function setDrinkingAge($newDrinkingAge)
    {
        self::$drinkingAge = $newDrinkingAge;
    }

    public function getPerson()
    {

        return $this->name . " is " . $this->age . " years old and has " . $this->eyeColor . " eyes.";
    }


    //Destructor
    // public function __destruct()
    // {
    // }
}
