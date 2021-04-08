<?php
$a = "";
print ("\$a is van het type " . gettype($a) . '</br>');
var_dump($a);
$b = (boolean)$a;
if ($b) {
    print ("</br>waar <br/>");
} else {
    print ("<br/>niet waar <br/>");
}
print ("\$b is van het type " . gettype($b) . '</br>');
var_dump($b);