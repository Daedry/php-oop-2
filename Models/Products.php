<?php

class Products {

    public $species; 
    public $product;
    public $price;


    public function __construct(String $species, String $price, String $product )
    {
        $this-> species = $species;
        $this-> price = $price;
        $this-> product = $product;
    }
    
}