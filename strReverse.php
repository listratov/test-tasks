
/**
*
* 1 way
**/
$a = 'abcdefgh';

$b = '';
for ($i = strlen($a)-1; $i>=0; $i--) {
       $b .= $a[$i];
}

$a = $b;
print_r($a);

/**
*
* 2 way
**/

$a = 'abcdefgh';

$b = '';
$l  = strlen($a)-1;
for ($i = 0; $i < $l/2; $i++) {
    $b = $a[$i];
    $a[$i] = $a[$l-$i];
    $a[$l-$i] = $b;
}

print_r($a);
