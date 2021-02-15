<?php

class House
{
    private $street;
    private $streetnumber;

    public function __construct($street, $streetnumber)
    {
        $this->street = $street;
        $this->streetnumber = $streetnumber;
    }

    public function getAddress()
    {
        return $this->street . " " . $this->streetnumber;
    }
}
