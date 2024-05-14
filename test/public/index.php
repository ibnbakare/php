<?php

declare(strict_types = 1);

// $paid  = "PAID";

// define("STATUS_" . $paid, "seen");

// echo STATUS_PAID ."\n";
$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;
echo $root;
echo "</br>";
define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);


define('FILES_PATH', $root . 'transaction_files' . DIRECTORY_SEPARATOR);
define('VIEWS_PATH', $root . 'views' . DIRECTORY_SEPARATOR);

/* YOUR CODE (Instructions in README.md) */
require APP_PATH . "app.php";
require APP_PATH . 'helper.php';

$files = getTransactonsFile(FILES_PATH);
// getTransactonsFile(VIEWS_PATH);
$transaction = [];
foreach($files as $file){
    echo $file . "</br>";
    // print_r(getTranctions($file));
    $transaction = array_merge($transaction,getTranctions($file));
    // print_r($transaction);
}
// print_r($transaction);
// [$income,$expense] = addIncome($transaction);
// echo $transaction;


$total  = calculateTotals($transaction);

 
require VIEWS_PATH . "transactions.php";

// echo APP_PATH;

// echo "</br>";
// echo FILES_PATH;

// echo "</br>";
// echo VIEWS_PATH;

// echo "</br>";