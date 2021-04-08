<?php
$query=$_GET['SQLInput'];
if(stristr(strtolower($query),'delete') || stristr(strtolower($query),'drop') || stristr(strtolower($query),'truncate')){
    header("Location: app.php");
    exit();
}
$host = '192.168.33.22';
$db   = $_GET['select_database'];
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
    if(stristr(strtolower($query), 'select')){
        $statement = $pdo->query($query);
        print($query);
        print("<table>");
        while( $row = $statement->fetch() ) {
            print( '<tr><td>'.$row['id'].'</td><td>'
                .$row['name'].'</td></tr>' );
        }
        print( "</table>" );
    }
    if(stristr(strtolower($query), 'insert')){
        print( $query );
        $nrRows = $pdo->exec($query);
        print( "$nrRows affected" );
    }
} catch (PDOException $exception){
    print("Could not connect " . $exception->getMessage());
}

$pdo = null;
?>
