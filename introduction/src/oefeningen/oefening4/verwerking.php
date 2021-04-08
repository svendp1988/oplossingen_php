<?php
setcookie("naam", $_POST['naam']);
setcookie("achtergrondkleur", $_POST['achtergrondkleur']);
header("Location: http://localhost:8080/oefening4/toon.php");
exit();
