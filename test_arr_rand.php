<?php
$input = array("กล้วย", "ส้ม", "มะนาว", "องุ่น", "แตงโม");
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "<br>";
echo $input[$rand_keys[1]] . "<br>";
?>
