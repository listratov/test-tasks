<?php


$a = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h');

$arr = array($a[0] => '');

for ($i = 0; $i < count($a); $i++) {

    $arr = array($a[$i] => $arr, $a[0] => $i);

}

print_r($arr);
