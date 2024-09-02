<?php

namespace first;

class exception
{
    public function process(int $amount):void{
        if($amount <= 0){
            throw new \Exception("greater than zero and test") ;
        }
        if($amount !== 40){
            throw new amountNotequal("Not equal to 40");
        }
    }
}