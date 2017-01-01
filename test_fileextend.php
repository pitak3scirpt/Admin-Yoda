<?php
$dir = new DirectoryIterator(dirname(FILE));
foreach ($dir as $fileinfo) {
  echo $fileinfo->getExtension() . "<br>";
}
$dir = new DirectoryIterator(dirname(FILE));
foreach ($dir as $fileinfo) {
  echo $fileinfo->getFilename() . "<br>";
}
$iterator = new DirectoryIterator(dirname(FILE));
echo "Path : <br>";
echo $iterator->getPath();
?>
