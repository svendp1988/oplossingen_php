<?php

require_once 'vendor/autoload.php';

use \toneel\Punt;
use \toneel\Egel;
use \toneel\Konijn;

$puntenTab = array();
for ($i = 0; $i < 100; $i++) {
    $puntenTab[] = new Punt(rand(0, 99), rand(0, 99));
}

//foreach ($puntenTab as $value) {
//    $value->drukAf();
//    echo "\n";
//}

$punt1 = $puntenTab[0];
$punt2 = $puntenTab[count($puntenTab) - 1];

echo "De afstand tussen punt 1 en punt 2 = " . $punt1->berekenAfstand($punt2);
echo "\n";

$egel = new Egel(1, 5);
$konijn = new Konijn(rand(0, 99), rand(0, 99));

$egel->interageer($egel);
echo "\n";
$konijn->beschrijf();
echo "\n";

$konijn->stapLinks();
$konijn->beschrijf();
echo "\n";

$egel->beschrijf();
echo "\n";
$egel->stapRechts();
$egel->beschrijf();
echo "\n";


$act = array();

$act[] = $egel;
$act[] = $konijn;

foreach ($act as $value) {
    $value->beschrijf();
    echo "\n";
}