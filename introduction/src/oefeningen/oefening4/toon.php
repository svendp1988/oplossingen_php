<?php
$achtergrondkleur = $_COOKIE['achtergrondkleur'];
$naam = $_COOKIE['naam'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body style="background: <?php print ("$achtergrondkleur")?>">
<?php print ("$naam") ?>
</body>
</html>


