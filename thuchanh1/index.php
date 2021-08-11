<?php
include_once ("Circle.php");
include_once ("Cylinder.php");
include_once ("Rectangle.php");
include_once ("Shape.php");
include_once ("Square.php");

$circle = new Circle('CircleOne',5);
echo 'Circle area: '. $circle->calculateArea().'<br>';
echo 'Circle perimeter: '.$circle->calculatePerimeter().'<br>';

$cylinder = new Cylinder('CylinderOne',5,7);
echo 'Cylinder area: '. $cylinder->calculateArea().'<br>';
echo 'Cylinder perimeter: '.$cylinder->calculatePerimeter().'<br>';

$rectangle = new Rectangle('RectangleOne', 6 , 8);
echo 'Rectangle area: ' . $rectangle->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br />';

$square = new Square('SquareOne', 7 , 7, 7);
echo 'Rectangle area: ' . $square->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $square->calculatePerimeter() . '<br />';
