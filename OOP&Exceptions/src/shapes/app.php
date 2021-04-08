<?php
require_once("Point.php");
require_once("Shape.php");
require_once("Rectangle.php");
require_once("Circle.php");
require_once("IterableString.php");
$point1 = new Point(1, 2);
print ($point1);
print ("\n");
$point2 = new Point(5, 11);
print ($point2);
print ("\n");
$distance = $point1->calculateDistance($point2);
print ($distance);
print ("\n");
print (Point::getCountInitialisations());
print ("\n");
unset($point2);
print (Point::getCountInitialisations());
print ("\n");

print ("-------------------------------------------------------------------------------------------------------------");
print ("\n");

$point = new Point(1, 2);
$rectangle = new Rectangle($point, 12, 2);
$rectangle->draw();
print($rectangle);
print ("\n");
$circle = new Circle($point, 12);
print($circle->calculatePerimiter());
print ("\n");
print ($circle);
print ("\n");

print ("-------------------------------------------------------------------------------------------------------------");
print ("\n");

$text = new IterableString("Wolgang Amadeus Mozart");
foreach ($text as $index => $character) {
    print("$index: $character\n");
}

