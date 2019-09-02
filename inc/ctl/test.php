<?php
class test extends controller
{
    private $name;
    private $grade;
    private $quality;
    private $unit;
    private $sale_rate;
    private $gst_rate;
    private $remark;

    public function __construct()
    {
        $this->addProduct();
    }
    public function doSomething()
    {

    }
    public function addProduct()
    {

        $this->name = (isset($_GET['name']) ? $_GET['name'] : '');
        $this->grade = (isset($_GET['grade']) ? $_GET['grade'] : '');
        $this->quality = (isset($_GET['quality']) ? $_GET['quality'] : '');
        $this->unit = (isset($_GET['unit']) ? $_GET['unit'] : '');
        $this->sale_rate = (isset($_GET['sale_rate']) ? $_GET['sale_rate'] : '');
        $this->gst_rate = (isset($_GET['gst_rate']) ? $_GET['gst_rate'] : '');
        $this->remark = (isset($_GET['remark']) ? $_GET['remark'] : '');
        $sql = "INSERT INTO products (name,grade,quality,unit,sale_rate,gst_rate,remark) VALUES ('$this->name','$this->grade','$this->quality','$this->unit',$this->sale_rate,$this->gst_rate,'$this->remark')";
        self::query($sql);
    }

}
