<?php
require_once ("wiskunde.php");
$input = $_POST['number'];

if (is_numeric($input) && $input > 0) {
    $result = faculteit($input);
    print ("De faculteit van " . $input . " = " . $result);
} else {
    print ("De ingave " . $input . " is geen positief geheel getal.");
}
