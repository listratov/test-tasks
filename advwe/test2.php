<?php

echo "\n";

$data1 = [
    'parent.child.field' => 1,
    'parent.child.field2' => 2,
    'parent2.child.name' => 'test',
    'parent2.child2.name' => 'test',
    'parent2.child2.position' => 10,
    'parent3.child3.position' => 10,
];

/**
 * 1
 **/
$result = [];

foreach ($data1 as $key => $val) {
    $param = explode(".", $key);
    $arr = $val;
    for ($i = count($param) - 1; $i >= 0; --$i) {
        $arr = array($param[$i] => $arr);
    }
    $result = array_merge_recursive($result, $arr);
}

print_r($result);

/**
 *  2
 **/

$paths = [];

function makePaths($array, &$paths, $currentKey)
{
    empty($currentKey) ?: $currentKey .= '.';

    foreach ($array as $key => $value) {
        if (is_array($value)) {
            makePaths($value, $paths, $currentKey . $key);
        } else {
            $paths[$currentKey . $key] = $value;
        }
    }
}

makePaths($result, $paths, '');
print_r($paths);
