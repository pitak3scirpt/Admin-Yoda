<?php
echo "Today : ".date('F jS, Y', strtotime('today'));
echo "<br>";
$localtime = localtime();
echo '<pre>';
var_dump($localtime);
echo '</pre>';
?>
