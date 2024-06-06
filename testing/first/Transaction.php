<?php

namespace first;

use first\Status;
class Transaction{


    private string $status;

    public function __construct()
    {
        $this->setStatus(Status::STATUS_DECLINED);
    }
    function handles()
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
        var_dump($this->status);
    }

}