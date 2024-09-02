<?php

require_once  "../vendor/autoload.php";

use first\get_and_set;
use first\coffeemaker;
use first\exception;

use first\allmaker;
// 
//
echo "kids" . PHP_EOL;
$exc = new exception();
try {
    $exc->process(12);
}
catch (\Exception $e){
    echo $e->getMessage() . "Not equal to 40" . PHP_EOL;
}
echo "cont";
//$all = new allmaker();
//$maker = new coffeemaker;
//$maker->makeCoffee();
//$all->makeCoffee();
//$all->makematte();
//$get  = new get_and_set();

// echo $get->amount. PHP_EOL;