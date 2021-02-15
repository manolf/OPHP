<?php

class NewClass
{

    //Properties and Methods goes here
    public $data = "I am a property";

    public function __construct()
    {
        echo "This class has been instantiated <br>";
    }

    public function setNewProperty($newdata)
    {
        $this->data;
    }

    public function getProperty()
    {
        return $this->data;
    }

    public function __destruct()
    {
        echo "<br> This is the end of the class!";
    }
}

// $object = new NewClass;
// var_dump($object);
