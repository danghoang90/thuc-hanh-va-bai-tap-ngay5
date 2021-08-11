<?php
include_once ("Point2D.php");

class Point3D extends Point2D
{
    public $z =0;
    public function __construct($x, $y,$z)
    {
        parent::__construct($x, $y);
        $this->z = $z ;
    }
    public function setZ($z) {
        $this->z = $z;
    }
    public function getZ() {
        return $this->z;
    }
    public function setXYZ($x,$y,$z) {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }
    public function getXYZ() {
        $test =[];
        $test[0]=$this->x;
        $test[1]=$this->y;
        $test[2]=$this->z;
        return $test;
    }
    public function __toString()
    {
        return parent::__toString(). " $this->z";
    }
}
