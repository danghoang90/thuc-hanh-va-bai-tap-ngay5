<?php
include_once ("Point2D.php");
include_once ("Point3D.php");

$point2d = new Point2D(6,8);
echo $point2d->__toString();
echo "<br>";
echo print_r($point2d->getXY() );

echo "<br>";
echo "<br>";

$point3d = new Point3D(7,8,9);
echo $point3d->__toString();
echo "<br>";
echo print_r($point3d->getXYZ()) ;

