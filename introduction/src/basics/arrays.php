<?php
$a = array(1, 2, 3, 4);
$b = array(1, 2.1, true, "ja");
$c = array(1 => 12, "Juist" => true);
$d = array (2 => 1, 10);
echo '<table border ="1">';
echo '<tr><td>$a = array(1,2,3,4);</td><td> ';
var_dump($a);
echo '</td></tr>';
echo '<tr><td>$b = array(1,2.1,true,"ja");</td><td> ';
var_dump($b);
echo '</td></tr>';
echo '<tr><td>$c = array(1=> 12, "Juist" => true);</td><td> ';
var_dump($c);
echo '</td></tr>';
echo '<tr><td>$d = array (2 => 1, 10);</td><td> ';
var_dump($d);
echo '</td></tr>';
echo '</table>';

$a = array(1, 2, 3, 4);
echo "$a[0]</br>";
$a[0] = "ja";
var_dump($a);
echo "</br>";
$b = array("een" => 1, "twee" => 3   );
echo $b["een"] . "</br>";
echo "$b[een]</br>";
$b["twee"] = 2;
var_dump($b);
echo "</br>";

$a = array( 1, 2, 3, 4 );
$a[7] = 11;
var_dump( $a );
echo "</br>";
$b = array( "een" => 1, "twee" => 3 );
$b["drie"] = 3;
var_dump( $b );
echo "</br>";

$d = array( 1, "a" =>2, "b" );
unset( $d["a"] );
var_dump( $d );