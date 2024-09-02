<?php

// require_once "./transaction.php";

// require_once "./test1.php";
// require_once "./test2.php";

spl_autoload_register(function ($class)  {

    var_dump(__DIR__ . "\\" . $class .".php");
    // var_dump(__DIR__ . "/" . str_replace("\\","/", $class) .".php");

    
});
// nameSpace and alias
use Book\saw\test as Book;

// using alias
$hi = new Book();

// $movie = new Movie\Order;

// $movie->handle();
// echo "<br>";

$hi-> handle();

// $trans = new Transaction(34,12,"20,months");

// // $trans->amount = 10;
// $fig = $trans->addTax(20);

// echo $trans-> getAmount();
// echo "</br>";
// echo $fig;
// echo "</br>";
// var_dump($trans->getAmount());
// echo $trans->applyDiscount(null);
?>