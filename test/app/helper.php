<?php
declare(strict_types = 1);

function formatAmount(int $amount):string {
    $isNegative =  $amount < 0;
    // var_dump($amount);

    
    return ($isNegative ? "-" : ""). "$" . number_format(abs($amount),1);

}

?>