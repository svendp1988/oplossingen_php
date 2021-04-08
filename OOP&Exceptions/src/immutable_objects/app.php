<?php
require_once 'vendor/autoload.php';
use Model\Point;

$point = new Point(1, 2);
$point2 = $point;
$point = $point->changeX(12);
print($point);
print("\n");
print($point2);