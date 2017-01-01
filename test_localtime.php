<?php
echo "Today : ".date('F jS, Y', strtotime('today'));
echo "<br>";
echo time();
echo "<br>";
echo date('Y-m-d',time());
echo "<br>";
echo date("M-d-Y", mktime(0, 0, 0, 1, 1, 1997));
echo "<br>";
$localtime = localtime();
echo '<pre>';
var_dump($localtime);
echo '</pre>';
?>
