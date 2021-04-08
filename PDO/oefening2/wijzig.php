<?php

$host = '192.168.33.22';
$db = 'voorbeeld_a';
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
    $id = $_POST['id'];
    $naam = $_POST['naam'];
    $statement = $pdo->prepare('UPDATE werknemers set name = :naam WHERE id = :id');
    $statement->bindParam(':id', $id, PDO::PARAM_INT);
    $statement->bindParam(':naam', $naam, PDO::PARAM_STR);


    $numberRows = $statement->execute();
    print("$numberRows rows modified");
    print("\n");
} catch (PDOException $e) {
    print 'Exception!: ' . $e->getMessage();
}
$pdo = null;