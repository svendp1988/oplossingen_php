<?php
function som($getal1, $getal2)
{
    return $getal1 + $getal2;
}

function printResultaat($resultaat)
{
    print ($resultaat);
}

$resultaat = som4(1, 2);
printResultaat($resultaat);

print ('<br/>');

function som2($getal1, $getal2, $getal3 = 0)
{
    return $getal1 + $getal2 + $getal3;
}

$resultaat = som2(1, 2);
print ($resultaat);
print ('<br/>');

$resultaat = som2(1, 2, 3);
print ($resultaat);
print ('<br/>');

function som3(): int
{
    $som = 0;
    $argumenten = func_get_args();
    foreach ($argumenten as $argument) {
        $som += $argument;
    }
    return $som;
}

$resultaat = som3(1, 2);
print ($resultaat);
print ('<br/>');

$resultaat = som3(1, 2, 3, 7, 9);
print ($resultaat);
print ('<br/>');


function som4(int ...$getallen): int
{
    $som = 0;
    foreach ($getallen as $getal) {
        $som += $getal;
    }
    return $som;
}

$resultaat = som4(1, 2);
print ($resultaat);
print ('<br/>');
$resultaat = som4(1, 2, 3, 7, 9);
print ($resultaat);
print ('<br/>');

function printDatum(DateTime $date)
{
    print ($date->format('Y-m-d H:i:s'));
}

function printRij(array $rij)
{
    foreach ($rij as $element) {
        print($element . "\n");
    }
}

$date = new DateTime();
printDatum($date);
print ('<br/>');

$rij = [1, 2, 3];
printRij($rij);
print ('<br/>');
