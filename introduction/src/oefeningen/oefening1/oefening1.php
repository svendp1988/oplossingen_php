<?php
$output = '#';
$aantalLijnen = 7;
for ($i = 1; $i <= $aantalLijnen; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        print ("$output");
    }
    print ("</br>");
}

for ($i = 1; $i <= $aantalLijnen; $i++) {
    for ($j = 1; $j <= $aantalLijnen; $j++) {
        if ($j <= ($aantalLijnen - $i)) {
            print (" " . " ");
        } else {
            print ("$output");
        }

    }
    echo "</br>";
}

function triangle($n)
{
    $count = 0;

    // number of spaces
    $k = 2 * $n - 2;

    // outer loop to handle
    // number of rows
    // n in this case
    for ($i = 0; $i < $n; $i++)
    {

        // inner loop to handle
        // number spaces
        // values changing acc.
        // to requirement
        for ($j = 0; $j < $k; $j++)
            echo " ";

        // decrementing k after
        // each loop
        $k = $k - 1;

        // inner loop to handle
        // number of columns
        // values changing acc.
        // to outer loop
        for ($j = 0; $j <= $i; $j++ )
        {
            if ($count % 5 === 0) {
                echo '@ ';
            } else {
                echo "# ";
            }
            $count++;
        }

        // ending line after
        // each row
        echo "</br>";
    }
}

triangle($aantalLijnen);
