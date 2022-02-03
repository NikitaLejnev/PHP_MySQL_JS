// Checking for the validity of a date
<?php
$month = 9;
$day = 31;
$year = 2022;

if (checkdate($month, $day, $year)) echo "Valid date";
else echo "INvalid date";
