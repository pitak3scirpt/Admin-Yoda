<?php
echo "Today : ".date('F jS, Y', strtotime('today'));
echo "<br>";
echo time();
echo "<br>";
echo date('Y-m-d',time());
echo "<br>";
$localtime = localtime();
echo '<pre>';
var_dump($localtime);
echo '</pre>';
?>
