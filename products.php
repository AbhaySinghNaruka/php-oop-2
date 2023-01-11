<?php

class products
{
    public $name;
    public $price;
    public $category;

    public function __construct($name, $category, $price)
    {
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
    }
}
