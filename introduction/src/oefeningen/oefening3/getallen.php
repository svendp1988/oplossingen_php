<?php
$input = $_GET['number'];

if (!ctype_digit($input) || $input <= 0) {
    header("Location: http://localhost:8080/ingave.html");
    exit();
} else  {
    ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ingave</title>
</head>
<body>
<form action="statistiek.php" method="get">
    <?php for ($i = 0; $i < $input; $i++) {
        print ("<input type='text' name='getallen[]'/><br>");
    }
    print ("<input type='submit'/>");
}
