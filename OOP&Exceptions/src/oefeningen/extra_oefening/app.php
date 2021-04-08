<?php

require_once 'vendor/autoload.php';

use model\Color;
use \model\ColouredPoint;

$point = ColouredPoint::make(1, 2, Color::RED);

print ($point);