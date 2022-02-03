<?php
$fh = fopen("testfile.txt", 'r') or
  die("File doesn't exist or you lack permissions to open it");

$line = fgets($fh);
fclose($fh);
echo $line;
