<?php

class Products
{
    //public $id; la id es autoincrement, no fa falta
    public $name;
    public $description;
    public $price;

    #Constructor
    public function __construct(/*$id,*/ $name, $description, $price)
    {
        /*$this->id = $id;*/
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;
    }

    public function getDescription()
    {
        return $this->description;
    }


    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

}

?>