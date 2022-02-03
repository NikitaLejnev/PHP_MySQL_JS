// Returning values in global variables
<?php
$a1 = "WILLIAM";
$a2 = "henry";
$a3 = "gatES";

echo $a1 . " " . $a2 . " " . $a3 . "<br>";
fix_names($a1, $a2, $a3);
echo $a1 . " " . $a2 . " " . $a3;

function fix_names(&$n1, &$n2, &$n3)
{
  global $a1;
  global $a2;
  global $a3;

  $a1 = ucfirst(strtolower($n1));
  $a2 = ucfirst(strtolower($n2));
  $a3 = ucfirst(strtolower($n3));
}
