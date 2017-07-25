<?php


$data1 = [
    'parent.child.field' => 1,
    'parent.child.field2' => 2,
    'parent2.child.name' => 'test',
    'parent2.child2.name' => 'test',
    'parent2.child2.position' => 10,
    'parent3.child3.position' => 10,
];


foreach($data1 as $key => $val) {
   
   $param = explode(".", $key);
   $arr = [];
   
   for($i = 0; $i < count($param); $i++) {
       echo "\n";
       
       $arr[$param[$i]] = [$param[$i]=>$val];
       
       
       
   }
    print_r($arr);
   // 
   // print_r(count($param));
  //  print_r($key);
    
    
}

//$pieces = explode(".", $data1);


//print_r($pieces);
