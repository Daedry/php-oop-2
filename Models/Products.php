<?php

class Products extends Animal {

    public $food;
    public $snack;
    public $various_stuff;
    public $toys;
    public $clothing;

    public function __construct(String $species, String $gender, String $food, String $snack, String $various_stuff, String $toys, String $clothing)
    {
        parent::__construct($species, $gender);
        $this-> food = $food;
        $this-> snack = $snack;
        $this-> various_stuff = $various_stuff;
        $this-> toys = $toys;
        $this-> clothing = $clothing;
    }
    
}