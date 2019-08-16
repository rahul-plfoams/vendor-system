<?php
class product
{
    private $id;
    private $name;
    private $price;
    private $units;
    private $description;
    public function __construct($id, $name, $price, $units, $description = "na")
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->units = $units;
        $this->description = $description;
    }
    public function getName()
    {
        return $this->name;
    }
}
