<?php
//header("Location: http://www.demorgen.be/");
//exit();
$file = 'a.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: attachment; filename="'.
    $file .'"');
readfile($file);