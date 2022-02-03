<?php
$fh = fopen("testfile.txt", 'r') or
  die("File doesn't exist or you lack permission to open it");

$text = fread($fh, 3);
fclose($fh);
echo $text;
