<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF­8">
    <title>bevestig</title>
</head>
<body>
De ingegeven waarde voor naam is
<?php print($_POST['id']);?>.
<form action="verwijder.php" method="post">
    <input type="hidden" name="id"
           value="<?php print($_POST['id']);?>"/>
    <input type="submit" value="bevestig" />
</form>
<a href="ingave.html">terug</a>
</body>
</html>