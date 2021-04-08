<?php
$input = $_POST['number'];
if (is_numeric($input) && $input > 0 && $input < 100) {
    for ($i = 0; $i < $input; $i++) {

        $fibonacci = Fibonacci($i);
        if ($fibonacci < $input) {
            echo $fibonacci;
            echo (" ");
        }
    }
}

function Fibonacci($number){

    // if and else if to generate first two numbers
    if ($number == 0)
        return 0;
    else if ($number == 1)
        return 1;

    // Recursive Call to get the upcoming numbers
    else
        return (Fibonacci($number-1) +
            Fibonacci($number-2));
}
