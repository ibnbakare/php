<?php
// spl_autoload_register(function ($class){
//     $path =__DIR__ ."/".  str_replace("\\","/",$class) . ".php";
// //     echo  $path;
// // //    echo __DIR__ ."/". str_replace("\\","/",$class) . ".php";
// //     echo "<br>";
//     if(file_exists($path)){
//         require $path;
//     }
//
 //    var_dump($path);
// });

require_once "./vendor/autoload.php";


use first\Transaction;
use testing\second\Transaction as see;



$first = new Transaction();
//you can use without calling an instance of the class
//echo Transaction::STATUS_DECLINED;
echo "<br>";
echo $first::class;
echo "<br>";
//$first->setStatus($first::STATUS_DECLINED);
//$first->setStatus($first::STATUS_DECLINED);
echo $first->getStatus();
echo "<br>";
$first->setStatus("paid");
echo "<br>";
echo $first->getStatus();

//echo $first-> handles();
echo "<br>";

$second = new see();
    echo "<br>";
echo $second->handle();


?>