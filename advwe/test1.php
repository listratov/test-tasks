<?php

/**
*
*
**/



$a = array_reverse(array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h'));

$arr = array($a[count($a)-1] => '');

for ($i=count($a) -2; $i>=0 ; $i--) {
    $arr = array($a[$i] => $arr);
}

print_r($arr);
