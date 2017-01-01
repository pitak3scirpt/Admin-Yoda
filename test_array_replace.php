<?php
$base = array("orange", "banana", "apple", "raspberry");
var_dump($basket);
echo "<br>";
echo "<br>";
$replacements = array(0 => "pineapple", 4 => "cherry");
$basket = array_replace($base, $replacements);
var_dump($basket);
?>
