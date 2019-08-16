<?php
class order
{
    private $id;
    public function __construct($id, $products)
    {
        $this->id = $id;

        echo $this->id . " is assigned for order";
    }

}
