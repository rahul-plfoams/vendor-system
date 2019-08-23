<?php
class admin extends controller
{
    public $vendors = ['rahul', 'rohit'];
    public function doSomething()
    {
        $this->getVendor();
    }
    public function getVendor()
    {
        foreach ($this->vendors as $value) {
            echo $value;
        }
    }
}
