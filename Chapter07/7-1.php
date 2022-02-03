<?php
echo "<pre>";

// Pad to 15 spaces
printf("$%15f\n", 123.42 / 12);

// Pad to 15 spaces, fill with zeros
printf("$%015f\n", 123.42 / 12);

// Pad to 15 spaces, 2 decimal places precision
printf("$%15.2f\n", 123.42 / 12);

// Pad to 15 spaces, 2 decimal places precision, fill with zeros
printf("$%015.2f\n", 123.42 / 12);

// Pad to 15 spaces, 2 decimal places precision, fill with # symbol
printf("$%'#15.2f\n", 123.42 / 12);
