<?php

class User
{
    public $name;
    public $lastname;
    public $date_of_birdth;
    public $email;
    public $street_address;

    public function __construct(String $name, String $lastname, String $date_of_birdth, String $email, String $street_address)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->date_of_birdth = $date_of_birdth;
        $this->email = $email;
        $this->street_address = $street_address;
    }


    // Full Name

    public function setFullName($name, $lastname)
    {
        $n = $this->name = $name;
        $l = $this->lastname = $lastname;
        $n . ' ' . $l;
    }

    public function getFullName()
    {
        return $this->name . ' ' . $this->lastname;
    }


    // Date of birdth

    public function setDate($date_of_birdth)
    {
        $this->date = $date_of_birdth;
    }

    public function getDate()
    {
        return $this->date_of_birdth;
    }


    // Email

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }


    // Address

    public function setAddress($street_address)
    {
        $this->street_address = $$street_address;
    }

    public function getAddress()
    {
        return $this->street_address;
    }
}

$roma = new User('Roma', 'Margine', '06/08/2000', 'roma@gmail.com', 'via verdi 12/1');

// var_dump($roma);
var_dump($roma->getFullName());
var_dump($roma->getDate());
var_dump($roma->getEmail());
var_dump($roma->getAddress());
