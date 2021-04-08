<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ingave</title>
</head>
<body>
<?php
$ingave = $_GET['getallen'];
$getallen = array();
$fouten = array();

foreach ($ingave as $value) {
    if (is_numeric($value)) {
        $getallen[] = $value;
    } else {
        $fouten[] = $value;
    }
}

print ("De hoogste waarde is: " . max($getallen) . "</br>");
print ("De laagste waarde is: " . min($getallen) . "</br>");

$som = 0;

foreach ($getallen as $getal) {
    $som += $getal;
}
if (count($getallen) > 0) {
    $gemiddelde = $som / count($getallen);

    print ("Het gemiddelde is: " . $gemiddelde . "</br>");
} else {
    print ("Er kon geen gemiddelde berekend worden.");
}

foreach ($fouten as $fout) {
    print ("Foute ingave: " . $fout . "</br>");
}
?>
</body>
</html>
