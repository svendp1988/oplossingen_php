<?php
require_once "vendor/autoload.php";

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

    $id = $_GET['product_id'];

    if ($productModel->deleteProduct($id)) {
        echo "$id werd verwijderd";
    };


} catch (PDOException $exception) {
    print ("Could not connect " . $exception->getMessage());
} catch (\model\ModelException $e) {
}
