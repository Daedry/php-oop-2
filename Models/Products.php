<?php

trait Products {

    public $species;
    public $product;
    public $name;
    public $brand;
    public $description;
    public $price;


    public function __construct(String $species, String $product, string $name, String $brand, String $description, String $price)
    {
        $this-> species = $species;
        $this-> product = $product;
        $this-> name = $name;
        $this-> brand = $brand;
        $this-> description = $description;
        $this-> price = $price;
    }
    
}