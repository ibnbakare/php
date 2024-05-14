<?php

declare(strict_types = 1);

// Your Code
function getTransactonsFile(string $dirPath) : array {
    $files = [];
    foreach(scandir($dirPath ) as $file){
        if(is_dir($file)){
            continue;

       
        }
        $files[] = $dirPath . $file ;
        
        // var_dump($files);
        // echo "</br>";
      
    // echo $dirPath . $file . "</br>";
}
    
    return $files;
    
}

function getTranctions(string $filePath){
    if(!file_exists($filePath)){
        trigger_error('file ' . $filePath . 'doesnt exist. ', E_USER_ERROR);
    }
    $file = fopen($filePath, "r");
    $transactions = [];
    // discard first row
    fgetcsv($file);
   
    while(($transction = fgetcsv($file)) !== false){
    // print_r( $transction );
    $seeing = extractTransaction($transction);
    $transactions[] = $seeing;

    // [$date, $checkNumber, $description, $amount] =  $transction;
    // echo $date ;
    // echo "<br>";
    // echo $checkNumber;
    // echo "<br>";
    //     echo $amount;
    // echo "{$date} and {$amount}". "</br>";
    // $transctions[] = $transction;
    // print_r($transctions);
    // $transactions =  [
    //     'date'        => $date,
    //     'checkNumber' => $checkNumber,
    //     'description' => $description,
    //     'amount'      => $amount,
    // ];
        
    }
   
    // print_r($transactions);
    return $transactions;

}



function extractTransaction(array $transactionRow): array
{
    [$date, $checkNumber, $description, $amount] = $transactionRow;

    $amount = (float) str_replace(['$', ','], '', $amount);

    return [
        'date'        => $date,
        'checkNumber' => $checkNumber,
        'description' => $description,
        'amount'      => $amount,
    ];
}

function calculateTotals(array $transactions): array
{
    $totals = ['netTotal' => 0, 'totalIncome' => 0, 'totalExpense' => 0];
    // print_r($transactions);
    foreach ($transactions as $transaction) {
        // print_r($transaction);
        $totals['netTotal'] += $transaction['amount'];

        if ($transaction['amount'] >= 0) {
            $totals['totalIncome'] += $transaction['amount'];
        } else {
            $totals['totalExpense'] += $transaction['amount'];
        }
    }
    // print_r($totals);
    return $totals;
}

// function addIncome(array $trans) {
  
//     $sums = 0;
//     $expense = 0;
//     foreach($trans as $tran){
//         // print_r($tran[3]);
//         // echo  "</br>";
//         print_r($tran);
//         echo $tran['amount'];
//         $d = $tran['amount'];
//         echo $d  . "<br>";
//         $tran = str_replace(["$",","], "", $d);
        
//         // // print_r($tran);
//         // // echo  "</br>";
//         // echo $tran;
//         // echo  "</br>";
//         if ($tran > 0){
//             echo $tran;
//             echo  "</br>";
//             $sums += $tran;
//         }
//         else{
//             $expense +=$tran;
//         }
//     }
//     // echo $sums;

//     return [$sums,$expense];
    
// }