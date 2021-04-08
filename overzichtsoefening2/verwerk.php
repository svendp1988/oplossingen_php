<?php
// naam: 
require_once "vendor/autoload.php";

use model\ModelException;
use repositories\SenderRepository;

$user = 'root';
$password = 'root';
$database = 'examenwa2019';
$server = 'localhost';
$pdo = null;
try {
    $pdo = new PDO("mysql:host=$server;dbname=$database", $user, $password);
    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );
    $senderRepository = new SenderRepository($pdo);
    $id = (int)$_GET['senderid'];
    $sender = $senderRepository->getSenderById($id);
    if (null === $sender) {
        print ("$id niet gevonden");
    } else {
        $name = $sender->getName();
        print ("$name");
        for ($i = 0; $i < $sender->countNumberOfMessages(); $i++) {
            $message = $sender->getMessageByIndex($i)->getContents();
            print ("$message");
        }
    }
} catch (PDOException | ModelException $exception) {
    print ("$exception->getMessage()");
}

