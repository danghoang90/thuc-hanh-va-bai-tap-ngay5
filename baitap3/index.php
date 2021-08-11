<?php
include_once ("Point.php");
include_once ("MoveablePoint.php");

$point = new Point(7,7);
echo print_r( $point->getXY());
echo "<br>";
echo "<br>";
$moveablePoint = new MoveablePoint(8,8);
echo print_r($moveablePoint->getSpeed());
echo "<br>";
echo "<br>";
echo "<pre>";
var_dump($moveablePoint->move());
