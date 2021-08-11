<?php
class Point2D
{
    public $x = 0;
    public $y = 0;
    public function __construct($x,$y) {
        $this->x = $x;
        $this->y = $y;
    }
    public function setX($x) {
        $this->x = $x;
    }
    public function getX() {
       return $this->x ;
    }
    public function setY($y) {
        $this->y = $y;
    }
    public function getY() {
       return $this->y ;
    }
    public function setXY($x,$y) {
        $this->x=$x;
        $this->y= $y;
    }
    public function getXY() {
        $test =[];
        $test[0]=$this->x;
        $test[1]=$this->y;
        return $test;

    }
    public function __toString(){
        return ("$this->x $this->y");
    }

}
