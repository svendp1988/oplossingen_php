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

$users = array();
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    $statement = $pdo->query('select * from werknemers');
    print("<table>");
    while ($row = $statement->fetch()) {
        print('<tr>
                    <td>' . $row['id'] . '</td>
                    <td>' . $row['name'] . '</td>
                </tr>');
    }
    print("</table>");
    print ("\n");
    print ("
<form action='wijzig.php' method='post'>
    <input type='text' name='id' placeholder='Id'>
    <input type='text' name='naam' placeholder='naam'>
    <input type='submit' value='submit'>
</form>");
print ("
<form action='voegtoe.php' method='post'>
    <input type='text' name='naam' placeholder='naam'>
    <input type='submit' value='submit'>
</form>");
print ("
<form action='bevestig.php' method='post'>
    <input type='text' name='id' placeholder='Id'>
    <input type='submit' value='submit'>
</form>");
} catch (PDOException $exception) {
    print ("Could not connect " . $exception->getMessage());
}
