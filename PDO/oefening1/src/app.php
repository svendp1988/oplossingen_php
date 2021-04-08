<?php

$databases = array();
$host = '192.168.33.22';
$db   = '';
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
    $statement = $pdo->query( 'SHOW DATABASES' );
    while ($row = $statement->fetch()){
        $databases[] = $row['Database'];
    }
    ?>
    <form action="verwerk.php" method="get">
        <h1>Databank</h1>
        <select name="select_database">
            <?php
            for ($i=0;$i<count($databases);$i++) {
                print('<option>'.$databases[$i].'</option>');
            }
            ?>
        </select>
        <br/>
        <p>SQL-QUERY (DROP, DELETE en TRUNCATE zijn niet toegelaten</p>
        <textarea name="SQLInput" cols="40" rows="5"></textarea>
        <input type="submit" value="bevestig" />
    </form>
    <?php
} catch (PDOException $exception){
    print("Could not connect " . $exception->getMessage());
}

$pdo = null;
?>
