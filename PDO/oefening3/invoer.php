<?php

require_once 'vendor/autoload.php';

use \model\ProductModel;


$host = '192.168.33.22';
$db = 'examenwa2020';
$user = 'root';
$pass = 'root';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);

    $productModel = new ProductModel($pdo);

    $products = $productModel->getAllProducts();
//
//    print ("
//    <form action='verwerking.php' method='get'>
//        <select name='product_id'>
//        ");


        } catch (PDOException $exception) {
        print ("Could not connect " . $exception->getMessage());
    }

$options = '';
foreach($products as $key => $value) {
    $weight = $value['weight'];
    $name = $value['name'];
    $id = $value['id'];
    $options .= "<option value=\"$id\">$name ($weight)</option>\n";
}
$select = "<select name=\"product_id\">\n$options\n</select>";
    ?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>
<form action="verwerking.php" method="get">
        <?php
            echo $select; //close your tags!!
        ?>
    </select>
    <input type="submit" value="VERWIJDER" />
</form>
</body>
</html>

