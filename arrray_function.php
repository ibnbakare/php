<?php
require "./helper.php";
// array chunck
$arr = ["a"=>1,"b"=>2,"c"=>3,"d"=>4,"e"=>5];
//  the 3rd arg is to presvser the key default is false
$chunk= array_chunk($arr,3);

prettyprint(array_map(fn($ele)=> $ele * 2, $chunk[1]));

// array comabine
/**
 * this uses the 1st arr as the key and the 2nd as the value. 
 * both arr has to be of equal len
 */

 

 $arr1 = ["a","b","c","d"];
 $arr2 = [1,2,3,4];

 prettyprint(array_combine($arr1, $arr2));

// arr filter
 /**
  * arr filter loops through the arry and returns the value thats true.
  */
$arr3 = [1,2,3,4,5,6,7,8,9];

$fil = array_filter($arr3, fn($ele) => $ele % 2 == 0,ARRAY_FILTER_USE_BOTH);

// to organize the arr in order(0,1,2) use array_value()

$even = array_values($fil);
prettyprint(($fil));
prettyprint(($even));

/**
 * arr keys check search for a value in an arr an retuen the key
 * 
 */

 $keys = array_keys($arr3,8);
 prettyprint($keys);

//  array redce
/**
 * used to reduce array to a single digits,
 * its takes in the arr 1st then a callback function
 * the 1st parameter is the result or sum from the funstion ran 
 * the 2nd parameter is the item you wan to iterate over
 * 
 */

 $invoiceItems = [
    ["price"=>9.7,"qty"=>3,"desc"=> "item 1"],
    ["price"=>9.0,"qty"=>2,"desc"=> "item 2"],
    ["price"=>8.7,"qty"=>1,"desc"=> "item 3"],
    ["price"=>2.7,"qty"=>5,"desc"=> "item 4"],
 ];
// you can start the sum by adding a value after the function
 $sum = array_reduce($invoiceItems,fn($sum,$item)=> $sum + $item['price'] + $item['qty']);

 echo ($sum);
