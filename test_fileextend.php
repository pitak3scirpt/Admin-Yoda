<?php
$dir = new DirectoryIterator(dirname(FILE));
foreach ($dir as $fileinfo) {
  echo $fileinfo->getExtension() . "<br>";
}
$dir = new DirectoryIterator(dirname(FILE));
foreach ($dir as $fileinfo) {
  echo $fileinfo->getFilename() . "<br>";
}
?>
