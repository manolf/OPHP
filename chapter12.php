<?php

class FirstClass
{
    //Properties
    const EXAMPLE = "You can't change this!";


    //Methods
    public static function test()
    {
        $testing = "This is a test";
        return $testing;
    }
}

$a = FirstClass::EXAMPLE;
echo $a;
$b = FirstClass::test();
echo $b;
echo "<hr>";

class SecondClass extends FirstClass
{

    //Properties
    public static $staticProperty = "A static property";

    //Methods
    public static function anotherTest()
    {
        echo parent::EXAMPLE;
        echo self::$staticProperty;
    }
}

SecondClass::anotherTest();
