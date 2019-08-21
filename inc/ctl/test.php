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

    }
    public static function doSomething()
    {

    }
    public function addProduct()
    {
        $this->name = $_GET['name'];
        $this->grade = $_GET['grade'];
        $this->quality = $_GET['quality'];
        $this->unit = $_GET['unit'];
        $this->sale_rate = $_GET['sale_rate'];
        $this->gst_rate = $_GET['gst_rate'];
        $this->remark = $_GET['remark'];
        $sql = "INSERT INTO products (name,grade,quality,unit,sale_rate,gst_rate,remark) VALUES ('$this->name','$this->grade','$this->quality','$this->unit',$this->sale_rate,$this->gst_rate,'$this->remark')";
        self::query($sql);
    }

}
