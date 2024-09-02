<?php

namespace first;

use first\Status;
class Transaction {


   private static int $count = 0;
    private string $status;

    public function __construct( public string $description,public float $amount = 12.0)
    {


        $this->setStatus(Status::STATUS_DECLINED);
        $this::$count++;
    }
//   static method or property does not require the instance of a class
//its assumed to be global and applies to all class not just a particular
//instance
public static function getCount():int
{
//    We use self keyword here because this is attached to an object
//    while self is to a class so this wont work here
    return self::$count;
}
   public function handles()
    {
        var_dump(Status::STATUS_PAID);
        echo "<br>";
        echo Status::STATUS_PENDING;
    }

    public function setStatus(string $status):self
    {
        if(!isset(Status::All_Status[$status])){
            throw new \InvalidArgumentException("Invalid status");
        };
//        var_dump( $this->status);
        $this->status = $status;
        return $this;
    }

    public function getStatus()
    {
//        var_dump($this->status);
        echo  $this->amount;

    }

}