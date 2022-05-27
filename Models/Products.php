<?php

trait Products {

    public $species;
    public $product;
    public $image;
    public $name;
    public $brand;
    public $description;
    public $price;


    public function __construct(String $species, String $product, String $image, string $name, String $brand, String $description, int $price)
    {
        $this-> species = $species;
        $this-> product = $product;
        $this->image = $image;
        $this-> name = $name;
        $this-> brand = $brand;
        $this-> description = $description;
        $this-> price = $price;
    }
    
}