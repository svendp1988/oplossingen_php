<?php

require_once 'vendor/autoload.php';

use Util\Date;
use \Exceptions\DateException;

$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];

try {
    $date = Date::make($day, $month, $year);
} catch (DateException $exception) {
    print ($exception->getMessage());
}

print ($date->printMonth());
