<?php

class Animal
{

    public $species;
    public $gender;

    public function __construct(String $species, String $gender)
    {
        $this->species = $species;
        $this->gender = $gender;
    }
}
