<?php
foreach (range(0, 12) as $number) {
  echo $number;
}
  echo "<br>";
// การเพิ่มทีละขั้น
foreach (range(0, 100, 10) as $number) {
  echo $number;
}
echo "<br>";
// การใช้ตัวอักษร
foreach (range('a', 'i') as $letter) {
  echo $letter;
}
?>
