<?php
declare(strict_types=1);
function foo():int| array{
     $s =  [2,3,3];
   return $s;
   // return $w;
}
function sum($a,$b,...$adds){
    $sum = 0;
    foreach($adds as $num){
        $sum += $num;
        echo $sum ."</br>";
    }
    // return $a + $b;
}

$r = 4;
$t = 2;

// echo sum(1,22,3,4);


// arrrow functons,anon funtioms
function foos($u){
    // $s =  [2,3,3];
    // $r  = array_map(function($ele){
    //     return $ele * 2;
    // },$u);
    return $u * 2;
}


// normal funtion
function sums(callable $r,...$h){
    print_r($h );
    echo "</br>";
  
    
    return $r(array_sum($h));
    
}

print_r( sums("foos",1,3,4));

// 
echo "</br>";

// arrow function
$arr = [2,3,4,5];

$res = array_map(fn($s)=> $s * 2 , $arr);
print_r($res);
// var_dump( foo());
// echo $do;

