<?php
class Transaction{
    private $amount;
    private $mark;

    public function __construct(
        // if constructor property is defined as private here
        // the class automatically assigns it as a class property
        private $total,
        float $amount,string $mark)
    {
        // $this-> total = $total;
        $this->amount  = $amount;
        $this->mark = $mark;
    }

    public function addTax($rate) : float {
        
        // return $this->amount += $this->amount *$rate /100;
        return 123;


    }

    public function applyDiscount(?int $rate) : ?float {
        return $rate === null ? "This is Null" : $this->amount -= $this->amount * $rate /100;
    //    return  $this->amount -= $this->amount * $rate /100;
        
    }

    public function getAmount()  {
        return $this->total;
        
    }
}


?>