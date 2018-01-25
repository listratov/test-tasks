<?php

$a = '1a2s3d4f5g6h7j';
$b = '';
for ($i = strlen($a)-1; $i>=0; $i--)
    $b .= $a[$i];
$a = $b;

print_r($a);
