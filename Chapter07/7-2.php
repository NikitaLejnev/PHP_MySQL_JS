<?php
echo "<pre>";

$h = 'Rasmus';

printf("[#s]\n",       $h); // Standard output
printf("[%12s]\n",     $h); // Right justify with spaces to width 12
printf("[%-12s]\n",    $h); // Left justify with spaces
printf("[%012s]\n",    $h); // Pad with zeros
printf("[%'#12s]\n\n", $h); // Use the custom padding character '#'

$d = 'Rasmus Lerdorf';

printf("[%12.8s]\n",     $d); // Right justify, cutoff of 8 characters
printf("[%-12.12s]\n",   $d); // Left justify, cutoff of 12 characters
printf("[%-'@12.10s]\n", $d); // Left justify, pad with '@', cutoff 10 chars