<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bevestig</title>
</head>
<body>
<?php
foreach ( $_POST['vriend'] as $index => $vriend ) {
    print( $index . ': ' .   $vriend . '<br/>' );
}
?>
</body>
</html>